@if (!empty($datas))
    <div class="accordion">
        <div class="accordion-item">
            <h6 class="accordion-header"><button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                    data-bs-target="#result-search">Resultat de la recherche</button></h6>
            <div id="result-search" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <table class="table table-condensed table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Telephone <span class="mdi mdi-phone"></span></th>
                                <th>Adresse <span class="mdi mdi-location-enter"></span></th>
                                <th>Date D'incorporation <span class="mdi mdi-location-enter"></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item['nom'] }}</td>
                                    <td>{{ $item['telephone'] }}</td>
                                    <td>{{ $item['adresse'] }}</td>
                                    <td> {{ $item['date_incorporation'] }}</td>
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
