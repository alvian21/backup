<?php

namespace App\Http\Controllers\API;


use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
            'trmutasidt' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            $mutasihd = $request->get('trmutasihd');
            $mutasidt = $request->get('trmutasidt');
            $mutasihd = json_decode($mutasihd,true);
            $mutasidt = json_decode($mutasidt,true);

            return response($mutasihd);
            DB::beginTransaction();
            try {
                foreach ($mutasihd as $key => $value) {

                    $tanggal = date('Y-m-d', strtotime($value['Tanggal']));
                    $cekmutasi = Trmutasihd::whereDate('Tanggal', $tanggal)->where('NomorLokal', $value['Nomor'])->whereNotNull('NomorLokal')->first();
                    if (!$cekmutasi) {
                        $nomor = $this->generateNomor($tanggal);
                        $newmutasi = new Trmutasihd();
                        $newmutasi->Transaksi = 'PENJUALAN';
                        $newmutasi->Nomor = $nomor;
                        $newmutasi->NomorLokasl = $value['Nomor'];
                        $newmutasi->Tanggal = $value['Tanggal'];
                        $newmutasi->KodeSuppCust = $value['KodeSuppCust'];
                        $newmutasi->DiskonPersen = $value['DiskonPersen'];
                        $newmutasi->DiskonTunai = $value['DiskonTunai'];
                        $newmutasi->Pajak = $value['Pajak'];
                        $newmutasi->PembayaranTunai = $value['PembayaranTunai'];
                        $newmutasi->PembayaranKredit = $value['PembayaranKredit'];
                        $newmutasi->PembayaranEkop = $value['PembayaranEkop'];
                        $newmutasi->TotalHarga = $value['TotalHarga'];
                        $newmutasi->StatusPesanan = $value['StatusPesanan'];
                        $newmutasi->TotalHargaSetelahPajak = $value['TotalHargaSetelahPajak'];
                        $newmutasi->DueDate = $value['DueDate'];
                        $newmutasi->save();

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
                            }
                        }
                    }
                }
                DB::commit();

                return response()->json([
                    'status' => true,
                    'message' => 'saved'
                ]);
            } catch (\Exception $th) {
                //throw $th;
                DB::rollBack();
                return response()->json([
                    'status' => false,
                    'message' => 'error'
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
