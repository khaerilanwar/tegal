<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\JasaModel;
use App\Models\KulinerModel;
use App\Models\PenginapanModel;
use Exception;

class Iklan extends BaseController
{
    protected $jasaModel;
    protected $kulinerModel;
    protected $penginapanModel;
    protected $kuliner;
    protected $penginapan;

    public function __construct()
    {
        helper('tegal');
        cekLogin();
        $this->kulinerModel = new KulinerModel();
        $this->penginapanModel = new PenginapanModel();
        $this->kuliner = \Config\Database::connect()->table('kuliner');
        $this->penginapan = \Config\Database::connect()->table('penginapan');
    }

    public function index()
    {
        $menu = $this->request->getGet('bidang');
        $displayIklan = $this->request->getGet('menu');
        $search = $this->request->getGet('produk');

        switch ($displayIklan) {
            case 'kuliner':
                if ($search) {
                    // $dataIklan = $this->kulinerModel->asArray()->like('nama_kuliner', $search)->findAll();
                    $dataIklan = $this->kulinerModel->where('status', 1)->where('user_email', session()->email)->asArray()->like('nama_kuliner', $search)->findAll();
                } else {
                    $dataIklan = $this->kuliner->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
                }
                break;
            case 'penginapan':
                if ($search) {
                    $dataIklan = $this->penginapanModel->where('status', 1)->where('user_email', session()->email)->asArray()->like('nama_penginapan', $search)->findAll();
                } else {
                    $dataIklan = $this->penginapan->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
                }
                break;
            default:
                $dataKuliner = $this->kuliner->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
                $dataPenginapan = $this->penginapan->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
        }

        if ($menu == 'kuliner') {
            $part = 'user/partial/kuliner';
            $title = 'Pasang Iklan Kuliner';
        } elseif ($menu == 'penginapan') {
            $part = 'user/partial/penginapan';
            $title = 'Pasang Iklan Penginapan';
        } else {
            $part = 'user/partial/index';
            $title = 'Pasang Iklan Anda';
        }

        if ($displayIklan) {
            $data = [
                'title' => $title,
                'user' => $this->user,
                'partial' => $part,
                'dataIklan' => $dataIklan,
                'displayIklan' => $displayIklan,
                'validation' => \Config\Services::validation(),
                'dataJasa' => [],
                'dataKuliner' => [],
                'dataPenginapan' => [],
            ];
        } else {
            $data = [
                'title' => $title,
                'user' => $this->user,
                'displayIklan' => false,
                'partial' => $part,
                'dataIklan' => false,
                'validation' => \Config\Services::validation(),
                'dataKuliner' => $dataKuliner,
                'dataPenginapan' => $dataPenginapan,
            ];
        }

        return view('user/iklan', $data);
    }

    public function update($menu, $id)
    {

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar apakah tetap gambar lama
        if ($fileGambar->getError() ==  4) {
            $namaGambar = $this->request->getPost('gambarLama');
        } else {
            // generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('assets/img', $namaGambar);
            // hapus file lama
            // unlink('assets/img/' . $this->request->getPost('gambarLama'));
            try {
                unlink('assets/img/' . $this->request->getPost('gambarLama'));
            } catch (Exception $e) {
                session()->setFlashdata('gagalUpdate', 'Gagal update data');
                return redirect()->to('/mitra');
            }
        }

        if ($menu == 'kuliner') {
            $this->kulinerModel->update($id, [
                'nama_kuliner' => htmlspecialchars($this->request->getPost('nama_kuliner')),
                'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
                'harga' => htmlspecialchars($this->request->getPost('harga')),
                'maps' => htmlspecialchars($this->request->getPost('maps')),
                'gambar' => $namaGambar
            ]);

            session()->setFlashdata('update', 'Data berhasil diupdate!');
            return redirect()->to('/mitra');
        } elseif ($menu == 'penginapan') {
            $this->penginapanModel->update($id, [
                'nama_penginapan' => htmlspecialchars($this->request->getPost('nama_penginapan')),
                'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
                'harga' => htmlspecialchars($this->request->getPost('harga')),
                'maps' => htmlspecialchars($this->request->getPost('maps')),
                'gambar' => $namaGambar
            ]);

            session()->setFlashdata('update', 'Data berhasil diupdate!');
            return redirect()->to('/mitra');
        }
    }

    public function hapus($id)
    {
        $jasa = $this->jasaModel->find($id);

        if ($jasa['gambar'] != 'anwar.jpeg') {
            // hapus gambar
            unlink('assets/img/' . $jasa['gambar']);
        }

        $this->jasaModel->delete($id);

        return redirect()->to('/pasang-iklan');
    }
}
