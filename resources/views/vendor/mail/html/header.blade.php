@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            {{-- <x-ui.logo style="fill:#343439; height:50px"></x-ui.logo> --}}
            {{-- <x-ui.logo></x-ui.logo> --}}
            <img src="{{ asset('assets/images/logo-bw.png') }}" style="width:50px">
        </a>
    </td>
</tr>
