<?php

namespace App\Http\Controllers\API;


use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Msanggota;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Trsaldototalbelanjakredit;
use App\Trsaldototalbelanjatunai;
use App\Trsaldobarang;
use App\Trsaldototalbelanjaekop;
use App\Trsaldototalbelanja;
use App\Trsaldoekop;
use App\Trmutasidt;
use App\Trmutasihd;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'trmutasihd' => 'required',
            'trmutasidt' => 'required',
            'KodeLokasi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            $mutasihd = $request->get('trmutasihd');
            $mutasidt = $request->get('trmutasidt');
            $mutasihd = json_decode($mutasihd, true);
            $mutasidt = json_decode($mutasidt, true);
            $kodelokasi = $request->get('KodeLokasi');
            // return response($mutasihd);
            DB::beginTransaction();
            try {

                $arrsaldototalbelanjatunai = [];
                $arrsaldoekop = [];
                $arrsaldototalbelanjaekop = [];
                $arrsaldototalbelanjakredit = [];
                $arrsaldototalbelanja = [];
                $arrsaldobarang = [];


                if (!empty($mutasihd) && !empty($mutasidt)) {
                    foreach ($mutasihd as $key => $value) {

                        $tanggal = date('Y-m-d', strtotime($value['Tanggal']));
                        $cekmutasi = Trmutasihd::whereDate('Tanggal', $tanggal)->whereTime('Tanggal', $value['Tanggal'])->where('NomorLokal', $value['Nomor'])->whereNotNull('NomorLokal')->first();
                        if (!$cekmutasi) {
                            $nomor = $this->generateNomor($tanggal);
                            $newmutasi = new Trmutasihd();
                            $newmutasi->Transaksi = 'PENJUALAN';
                            $newmutasi->Nomor = $nomor;
                            $newmutasi->NomorLokal = $value['Nomor'];
                            $newmutasi->Tanggal = date('Y-m-d H:i:s', strtotime($value['Tanggal']));
                            $newmutasi->KodeSuppCust = $value['KodeSuppCust'];
                            $newmutasi->DiskonPersen = $value['DiskonPersen'];
                            $newmutasi->DiskonTunai = $value['DiskonTunai'];
                            $newmutasi->Pajak = $value['Pajak'];
                            $newmutasi->LokasiAwal =  $kodelokasi;
                            $newmutasi->PembayaranTunai = $value['PembayaranTunai'];
                            $newmutasi->PembayaranKredit = $value['PembayaranKredit'];
                            $newmutasi->PembayaranEkop = $value['PembayaranEkop'];
                            $newmutasi->TotalHarga = $value['TotalHarga'];
                            $newmutasi->StatusPesanan = $value['StatusPesanan'];
                            $newmutasi->LastUpdateSP = $value['LastUpdateSP'];
                            $newmutasi->UserUpdateSP = $value['UserUpdateSP'];
                            $newmutasi->TotalHargaSetelahPajak = $value['TotalHargaSetelahPajak'];
                            $newmutasi->DueDate = $value['DueDate'];
                            $newmutasi->save();

                            $tunai = $value['PembayaranTunai'];
                            $tunai = intval($tunai);
                            if ($tunai > 0 && $tunai != 0) {
                                $cektunai = Trsaldototalbelanjatunai::where('KodeUser', $value['KodeSuppCust'])->OrderBy('Tanggal', 'DESC')->first();
                                $trsaldobelanjatunai = new Trsaldototalbelanjatunai();

                                $trsaldobelanjatunai->Tanggal = date('Y-m-d H:i:s');
                                $trsaldobelanjatunai->KodeUser = $value['KodeSuppCust'];
                                if ($cektunai) {
                                    $trsaldobelanjatunai->Saldo = $tunai + $cektunai->Saldo;
                                } else {
                                    $trsaldobelanjatunai->Saldo = $tunai;
                                }
                                $trsaldobelanjatunai->save();

                                $datatunai = [
                                    'Tanggal' =>    $trsaldobelanjatunai->Tanggal,
                                    'KodeUser' =>    $trsaldobelanjatunai->KodeUser,
                                    'Saldo' =>    $trsaldobelanjatunai->Saldo,
                                ];

                                array_push($arrsaldototalbelanjatunai, $datatunai);
                            }

                            //pembarayan ekop
                            $pembayaran_ekop = $value['PembayaranEkop'];
                            if ($pembayaran_ekop > 0) {
                                $cek = DB::select('call CEKSALDOEKOP(?)', [
                                    $value['KodeSuppCust']
                                ]);

                                if (isset($cek[0])) {
                                    $trsaldoekop = new Trsaldoekop();

                                    $trsaldoekop->Tanggal = date('Y-m-d H:i:s');
                                    $trsaldoekop->KodeUser = $value['KodeSuppCust'];
                                    $trsaldoekop->Saldo = $cek[0]->Saldo -  $pembayaran_ekop;
                                    $trsaldoekop->save();

                                    $datasaldoekop = [
                                        'Tanggal' =>    $trsaldoekop->Tanggal,
                                        'KodeUser' =>    $trsaldoekop->KodeUser,
                                        'Saldo' =>    $trsaldoekop->Saldo,
                                    ];


                                    $gettotalbelanjaekop = Trsaldototalbelanjaekop::where('KodeUser', $value['KodeSuppCust'])->orderBy('Tanggal', 'DESC')->first();
                                    $totalbelanjaekop = 0;
                                    if ($gettotalbelanjaekop) {
                                        $totalbelanjaekop = $gettotalbelanjaekop->Saldo;
                                    }

                                    $trsaldototalbelanjaekop = new Trsaldototalbelanjaekop();
                                    $trsaldototalbelanjaekop->Tanggal = date('Y-m-d H:i:s');
                                    $trsaldototalbelanjaekop->KodeUser = $value['KodeSuppCust'];
                                    $trsaldototalbelanjaekop->Saldo = $totalbelanjaekop + $pembayaran_ekop;
                                    $trsaldototalbelanjaekop->save();


                                    $datasaldototalbelanjaekop = [
                                        'Tanggal' =>    $trsaldototalbelanjaekop->Tanggal,
                                        'KodeUser' =>    $trsaldototalbelanjaekop->KodeUser,
                                        'Saldo' =>    $trsaldototalbelanjaekop->Saldo,
                                    ];

                                    array_push($arrsaldototalbelanjaekop, $datasaldototalbelanjaekop);

                                }
                            }

                            //pembayaran kredit
                            $pembayaran_kredit = $value['PembayaranKredit'];
                            if ($pembayaran_kredit > 0) {
                                $cek = DB::select('call CEKSALDOEKOP(?)', [
                                    $value['KodeSuppCust']
                                ]);

                                if (isset($cek[0])) {
                                    $trsaldoekop = new Trsaldoekop();
                                    $trsaldoekop->Tanggal = date('Y-m-d H:i:s');
                                    $trsaldoekop->KodeUser = $value['KodeSuppCust'];


                                    $trsaldokredit = new Trsaldototalbelanjakredit();
                                    $trsaldokredit->Tanggal = date('Y-m-d H:i:s');
                                    $trsaldokredit->KodeUser = $value['KodeSuppCust'];
                                    $trsaldoekop->Saldo = round($cek[0]->Saldo, 2) + $pembayaran_kredit;

                                    $cekkredit = Trsaldototalbelanjakredit::where('KodeUser', $value['KodeSuppCust'])->OrderBy('Tanggal', 'DESC')->first();
                                    if ($cekkredit) {
                                        $trsaldokredit->Saldo = $pembayaran_kredit + round($cekkredit->Saldo, 2);
                                    } else {
                                        $trsaldokredit->Saldo = $pembayaran_kredit;
                                    }
                                    $trsaldoekop->save();
                                    $trsaldokredit->save();

                                    $datasaldoekop = [
                                        'Tanggal' =>    $trsaldoekop->Tanggal,
                                        'KodeUser' =>    $trsaldoekop->KodeUser,
                                        'Saldo' =>    $trsaldoekop->Saldo,
                                    ];


                                    $datasaldototalbelanjakredit = [
                                        'Tanggal' =>    $trsaldokredit->Tanggal,
                                        'KodeUser' =>    $trsaldokredit->KodeUser,
                                        'Saldo' =>    $trsaldokredit->Saldo,
                                    ];

                                    array_push($arrsaldototalbelanjakredit, $datasaldototalbelanjakredit);
                                }
                            }

                            //trsaldototalbelanja
                            $cektotalbelanja = Trsaldototalbelanja::where('KodeUser', $value['KodeSuppCust'])->OrderBy('Tanggal', 'DESC')->first();
                            $trsaldototalbelanja = new Trsaldototalbelanja();

                            $trsaldototalbelanja->Tanggal = date('Y-m-d H:i:s');
                            $trsaldototalbelanja->KodeUser = $value['KodeSuppCust'];
                            if ($cektotalbelanja) {
                                $trsaldototalbelanja->Saldo = $pembayaran_kredit + $tunai + $pembayaran_ekop + $cektotalbelanja->Saldo;
                            } else {
                                $trsaldototalbelanja->Saldo = $pembayaran_kredit + $tunai + $pembayaran_ekop;
                            }
                            $trsaldototalbelanja->save();
                            $datasaldototalbelanja = [
                                'Tanggal' =>    $trsaldototalbelanja->Tanggal,
                                'KodeUser' =>    $trsaldototalbelanja->KodeUser,
                                'Saldo' =>    $trsaldototalbelanja->Saldo,
                            ];

                            array_push($arrsaldototalbelanja, $datasaldototalbelanja);

                            foreach ($mutasidt as $key => $row) {
                                if ($row['Nomor'] == $value['Nomor'] && $row['LastUpdate'] == $value['Tanggal']) {
                                    DB::table('trmutasidt')->insert([
                                        'Transaksi' => 'PENJUALAN',
                                        'Nomor' => $nomor,
                                        'Urut' => $row['Urut'],
                                        'KodeBarang' => $row['KodeBarang'],
                                        'DiskonPersen' => $row['DiskonPersen'],
                                        'DiskonTunai' => $row['DiskonTunai'],
                                        'UserUpdate' => $row['UserUpdate'],
                                        'LastUpdate' => $row['LastUpdate'],
                                        'Jumlah' => $row['Jumlah'],
                                        'Harga' => $row['Harga'],
                                        'Satuan' => $row['Satuan'],
                                        'HargaLama' => 0,
                                    ]);

                                    $getstok = Trsaldobarang::where('KodeBarang',  $row['KodeBarang'])->where('KodeLokasi',  $kodelokasi)->OrderBy('Tanggal', 'DESC')->first();
                                    $trsaldobarang = new Trsaldobarang();
                                    $trsaldobarang->Tanggal = date('Y-m-d H:i:s');
                                    $trsaldobarang->KodeBarang =  $row['KodeBarang'];
                                    if ($getstok) {
                                        $saldobarang = $getstok->Saldo -  $row['Jumlah'];
                                        $trsaldobarang->Saldo = $saldobarang;
                                    } else {
                                        $trsaldobarang->Saldo = 0;
                                    }

                                    $trsaldobarang->KodeLokasi =  $kodelokasi;
                                    $trsaldobarang->save();

                                    $datasaldobarang = [
                                        'Tanggal' =>    $trsaldobarang->Tanggal,
                                        'KodeBarang' =>    $trsaldobarang->KodeBarang,
                                        'Saldo' =>    $trsaldobarang->Saldo,
                                        'KodeLokasi' =>    $trsaldobarang->KodeLokasi,
                                    ];
                                    array_push($arrsaldobarang, $datasaldobarang);

                                }
                            }
                        }
                    }

                    $anggota = Msanggota::all();
                    foreach ($anggota as $key => $value) {
                        $tempsaldoekop = Trsaldoekop::where('KodeUser', $value->Kode)->orderBy('Tanggal', 'DESC')->first();
                        array_push($arrsaldoekop, $tempsaldoekop);
                    }

                    DB::commit();
                    return response()->json([
                        'status' => true,
                        'message' => 'saved',
                        'saldototalbelanjatunai' => $arrsaldototalbelanjatunai,
                        'saldoekop' => $arrsaldoekop,
                        'saldototalbelanjaekop' => $arrsaldototalbelanjaekop,
                        'saldototalbelanjakredit' => $arrsaldototalbelanjakredit,
                        'saldototalbelanja' => $arrsaldototalbelanja,
                        'saldobarang' => $arrsaldobarang
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                    ]);
                }
            } catch (\Exception $th) {
                //throw $th;
                DB::rollBack();
                return response()->json([
                    'status' => false,
                    'message' => 'error',
                    'data' => $th
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generateNomor($tanggal)
    {
        $nomor =  Trmutasihd::where('Transaksi', 'PENJUALAN')->whereDate('Tanggal', $tanggal)->max('Nomor');

        if (!is_null($nomor)) {
            $substr = substr($nomor, -5);
            $substr = (int) str_replace('-', '', $substr);
            $nomor = $substr + 1;
            $addzero =  str_pad($nomor, 4, '0', STR_PAD_LEFT);
            $formatNomor = "PE-" . $tanggal . "-" . $addzero;
        } else {
            $nomor = 1;
            $addzero =  str_pad($nomor, 4, '0', STR_PAD_LEFT);
            $formatNomor = "PE-" . $tanggal . "-" . $addzero;
        }

        return $formatNomor;
    }
}
