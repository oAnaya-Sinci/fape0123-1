@extends('layouts.sidebar')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header">{{ __('Produccion') }}</div>

                <div class="card-body bg-white">

                    <!-- <div class="doughnutsCharts"></div> -->
                    <!-- <div><canvas id="chartLineProduction"></canvas></div> -->
                    <div><canvas id="chartBarProduction"></canvas></div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-3">
            @include('layouts.sectionfilter')  
        </div>
    </div>

    <div class="row mt-3 justify-content-left">
        <div class="col-md-9">
            <div class="card shadow abortKgs">
                <div class="card-header">{{ __('Abortos Kilos Lado') }}</div>

                <div class="card-body bg-white hasTable horizontalScroll report">
                    
                    <table class="table table-hover table-sm tableAbortKgs">
                        <thead>
                            <tr>
                                <!-- Lado B -->
                                <th>Linea</th>
                                <th>Aborto Kgs</th>
                                <th>Carril 1</th>
                                <th>Carril 2</th>
                                <th>Carril 3</th>
                                <th>Carril 4</th>
                                <th>Carril 5</th>
                                <th>Carril 6</th>
                                <th>Carril 7</th>
                                <th>Carril 8</th>
                                <th>Carril 9</th>
                                <th>Carril 10</th>
                                <!-- Lado B -->
                                <!-- <th>Carril 11</th>
                                <th>Carril 12</th>
                                <th>Carril 13</th>
                                <th>Carril 14</th>
                                <th>Carril 15</th>
                                <th>Carril 16</th>
                                <th>Carril 17</th>
                                <th>Carril 18</th>
                                <th>Carril 19</th>
                                <th>Carril 20</th> -->
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <!-- Lado A -->
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <!-- Lado B -->
                                <!-- <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td> -->
                            </tr>
                            <tr>
                                 <!-- Lado A -->
                                 <td>2</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <!-- Lado B -->
                                <!--<td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td> -->
                            </tr>
                            <tr>
                                 <!-- Lado A -->
                                 <td>3</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <!-- Lado B -->
                                <!--<td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td> -->
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    
</div>
@endsection

@section('css_section')
    
@endsection

@section('js_section')
    <script src="/js/produccion/aborto/andon.js" type="module"></script>
@endsection