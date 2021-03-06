<p>Konfirmasi Penawaran GINUMERIK</p>
<p>Hi {{ $data['pic'] }},</p>
<p>Terima kasih telah melakukan penawaran ke GINUMERIK, berikut adalah data yang kami terima </p>
<p>
    <table>
        <tr>
            <td>Nama Perusahaan</td>
            <td> : </td>
            <td>{{ $data['nama_perusahaan'] }}</td>
        </tr>
        <tr>
            <td>PIC (Person in Change)</td>
            <td> : </td>
            <td>{{ $data['pic'] }}</td>
        </tr>
        <tr>
            <td>No Telephone</td>
            <td> : </td>
            <td>{{ $data['no.telephone'] }}</td>
        </tr>
    </table>

    List Alat :
    <ul>
        @php
            $merk = $data['merk_alat'];
            $quan = $data['qty'];
        @endphp
        @foreach($data['nama_alat'] as $item => $value)
            <li>{{ $value }} - {{  $merk[$item] }} - {{  $quan[$item] }} Unit </li>
        @endforeach
    </ul>
</p>