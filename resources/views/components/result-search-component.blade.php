@if ($type == 'element')
    <div class="accordion">
        <div class="accordion-item">
            <h6 class="accordion-header"><button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                    data-bs-target="#result-search">Resultat de la recherche</button></h6>
            <div id="result-search" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="my-2">
                        <a href="#" class="btn btn-success">Voir La version Ameliorer</a>
                        <a href="#" class="btn  btn-dark"><span class="mdi mdi-file-pdf-box mdi-18px"></span></a>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th colspan="2"><span class="mdi mdi-account"></span></th>
                                <th><span class="mdi mdi-phone"></span></th>
                                <th><span class="mdi mdi-location-enter"></span></th>
                                <th>Unites</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($value as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->telephone }}</td>
                                    <td>{{ Str::words($item->adresse,4) }}</td>
                                    <td>{{ $item->element? ( ($item->element->unite?$item->element->unite->nom:'......')  ):'non defini' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@elseif($type == 'unite')
    <div class="accordion">
        <div class="accordion-item">
            <h6 class="accordion-header"><button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                    data-bs-target="#result-search">Resultat de la recherche</button></h6>
            <div id="result-search" class="accordion-collapse collapse">
                <div class="accordion-body">

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th ><span > Numero </span></th>
                                <th><span> Nom</span></th>
                                <th><span>Ville</span></th>
                                <th><span>Chef</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($value as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->libelle }}</td>
                                    <td>{{ $item->chef ? $item->chef->personnel->nom:' -- not defini -- ' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@else
    <div id="no-result-data">Aucun resultat</div>
    <script>
        window.setTimeout(() => {
            document.querySelector('#no-result-data').style.display = 'none';
        }, 1500);
    </script>
@endif
