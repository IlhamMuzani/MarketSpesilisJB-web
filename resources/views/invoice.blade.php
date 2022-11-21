<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <title>INVOICE</title>

  <style>
    /* * {
            border: 1px solid black;
        } */
    .invoice-box {
      max-width: 800px;
      margin: auto;
      padding: 0px;
      font-size: 12px;
      font-family: 'Poppins', sans-serif;
      color: black;
    }

    .invoice-box table {
      width: 100%;
      line-height: inherit;
      text-align: left;
    }

    .invoice-box table td {
      /* padding: 8px; */
      vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
      text-align: right;
    }

    .invoice-box table tr.top table td {
      padding-bottom: 8px;
    }

    .invoice-box table tr.top table td.title {
      font-size: 32px;
      font-weight: 600;
      color: black;
    }

    .invoice-box table tr.information table td {
      padding-bottom: 16px;
    }

    .invoice-box table tr.heading td {
      /* background: #eee; */
      padding: 8px;
      border: 1px solid rgb(197, 197, 197);
    }

    .invoice-box table tr.heading td.head {
      /* background: #eee; */
      border: 1px solid rgb(197, 197, 197);
      font-weight: 500;
    }

    .invoice-box table tr.heading td.body {
      /* background: #eee; */
      font-weight: 400;
    }

    .invoice-box table tr.detail td {
      padding-top: 16px;
    }

    .invoice-box table.total tr.item td {
      padding: 8px;
    }

    .invoice-box table.total tr.item.body td {
      border-bottom: 1px solid rgb(197, 197, 197);
    }

    .invoice-box table.total tr.item.last td {
      border-bottom: 1px solid rgb(171, 171, 171);
    }

    @media only screen and (max-width: 600px) {
      .invoice-box table tr.top table td {
        width: 100%;
        display: block;
        text-align: center;
      }

      .invoice-box table tr.information table td {
        width: 100%;
        display: block;
        text-align: center;
      }
    }

    /* RTL */
    .rtl {
      direction: rtl;
      font-family: 'Poppins', sans-serif;
    }

    .rtl table {
      text-align: right;
    }

    .rtl table tr td:nth-child(2) {
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
      <tr class="top">
        <td colspan="2">
          <table class="table-header">
            <tr>
              <td class="title" style="letter-spacing: 4px">
                INVOICE
              </td>
              <td class="title" style="font-size: 16px; font-weight: 500; padding-top: 16px">
              Tanggal : {{ date('d-m-Y', strtotime($listdetail->updated_at)) }}
            </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr class="information">
        <td colspan="2">
          <table>
            <tr>
              <td>
                Dari
                <br>
                <strong style="font-weight: 500">{{ $listdetail->produk->user->username  }}</strong>
                <br>
                {{ $listdetail->produk->alamat }}
                <br>
                {{ $listdetail->produk->kecamatan }}
                <br>
                {{ $listdetail->produk->kelurahan }}
                <br>
                Nomor Telepon : +62{{ $listdetail->produk->user->phone }}
              </td>
              <td>
                Ke
                <br>
                <strong style="font-weight: 500">{{ $listdetail->user->username  }}</strong>
                <br>
                {{ $listdetail->user->alamat}}
                <br>
                Nomor Telepon : +62{{ $listdetail->user->phone }}<br>
                <strong style="font-weight: 500"></strong>
                <br>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr class="heading">
        <td class="head">
          Kategori Pesanan
        </td>
        <td class="body">{{ $listdetail->categori_pesanan  }}</td>
      </tr>
      <tr class="heading">
        <td class="head">
          Jenis Pembuatan
        </td>
        <td class="body">{{ $listdetail->produk->jenis_pembuatan }}</td>
      </tr>
      <tr class="heading">
        <td class="head">
          Model Spesifik
        </td>
        <td class="body">{{ $listdetail->produk->model  }}</td>
       
      </tr>
      <tr class="heading">
        <td class="head">
          Kesepakatan Pembuatan
        </td>
        <td class="body">{{ $listdetail->deskripsi_kesepakatan }}</td>
      </tr>
      <tr class="heading">
        <td class="head">
          Status
        </td>
        <td class="body">{{ $listdetail->status }}</td>
      </tr>
      <tr class="detail">
        <td style="width: 40%">
          <strong style="font-size: 16px; font-weight: 500;">Bukti Transfer :</strong>
          <br>
          <!-- <p>Bayar ditempat</p>
          <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">Pemesan membayar
            jasa pembuatan
            secara langsung </p>
          <p>Transfer Bank</p>
          <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">Pemesan membayar
            jasa pembuatan
            dengan cara transfer bank ke salah satu rekening pemilik layanan jasa Bangunan
          </p> -->
          <img src="{{ asset('storage/uploads/'.$listdetail->bukti) }}" alt="Bukti Transfer" width="120px"
            style="border-radius: 8px">
        </td>
        <td style="text-align: left">
          <strong style="font-size: 16px; font-weight: 500;">Harga yang harus dibayar :</strong>
          <table class="total" cellpadding="0" cellspacing="0" style="padding-top: 8px">
            <tr class="item body">
              <td>
                <strong style="font-weight: 500;">Harga Produk :<br>Rp.{{ $listdetail->harga }}</strong>
              </td>
              <td></td>
            </tr>
            <!-- <tr class="item last">
              <td>
                <strong style="font-weight: 500;">Biaya Pengiriman</strong>
              </td>
              <td>-</td>
              <td></td>
            </tr> -->
            <!-- <tr class="item">
              <td>
                <strong style="font-weight: 500;">Total :</strong>
              </td>
              <td>
                <strong style="font-weight: 500;"></strong>
              </td>
            </tr> -->
          </table>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>