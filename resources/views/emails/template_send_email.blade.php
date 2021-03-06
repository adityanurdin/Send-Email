<p>Penawaran dari website {{ $send['nama_perusahaan'] }}</p>
<p>Dear Admin,</p>
<p>{{ $send['nama_perusahaan'] }} telah mengirimkan penawaran dari website</p>
<p>
    <table>
        <tr>
            <td>Nama Perusahaan</td>
            <td> : </td>
            <td>{{ $send['nama_perusahaan'] }}</td>
        </tr>
        <tr>
            <td>PIC (Person in Change)</td>
            <td> : </td>
            <td>{{ $send['pic'] }}</td>
        </tr>
        <tr>
            <td>No Telephone</td>
            <td> : </td>
            <td>{{ $send['no.telephone'] }}</td>
        </tr>
    </table>

    List Alat :
    <ul>  
        @php
            $merk = $send['merk_alat'];
            $quan = $send['qty'];
        @endphp
        @foreach($send['nama_alat'] as $item => $value)
            <li>{{ $value }} - {{  $merk[$item] }} - {{  $quan[$item] }} Unit </li>
        @endforeach
    </ul>
</p>