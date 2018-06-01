@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                 <h2>Tableau 
                @switch($type)
                    @case('res')
                        resource
                        @break
                    @case('fin')
                        financier
                        @break
                    @case('tech')
                        technique
                        @break
                    @case('fintech')
                        technico-financier
                        @break
                    @case('eval')
                        evaluation
                        @break
                @endswitch
                de l'année {{ $year }} 
                <a href="/tables/{{ $type }}/{{ $year }}/generate/fr">
                    <button class="btn btn-success">Générer pdf francais</button>
                </a>
                <a href="/tables/{{ $type }}/{{ $year }}/generate/ar">
                    <button class="btn btn-success">Générer pdf arabe</button>
                </a>
            </h2>

                {{-- @if(!empty($tables))  --}}
                    <center>
                    <table style="font-size: 20px; border:1px solid black; vertical-align: center;" id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr style="background-color: #B9CDE5">
                                <th colspan="3">الخطة التمويلية</th>
                                <th rowspan="2">المبلغ</th>
                                <th rowspan="2">بيان المشروع</th>
                            </tr>
                            <tr>
                                <th style="background-color: #D7E4BD">مساعدة</th>
                                <th style="background-color: #FCD5B5">قرض</th>
                                <th style="background-color: #F2DCDB">تمويل ذاتي</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($groups as $group)
                              
                               <tr>
                                   <td style="background-color: #D7E4BD">{{ $group->assistance }}</td>
                                    <td style="background-color: #FCD5B5">{{ $group->loan }}</td>
                                    <td style="background-color: #F2DCDB">{{ $group->self_monetization  }}</td>
                                    <td style="background-color: #DBEEF4">{{ $group->total_amount}}</td>
                                    <td style="background-color: #DBEEF4">{{ $group->name }}</td>
                               </tr>
                            @endforeach
                             <tr>
                                <td style="background-color: #D7E4BD"></td>
                                <td style="background-color: #FCD5B5"></td>
                                <td style="background-color: #F2DCDB"></td>
                                <td style="background-color: #DBEEF4">{{ $total }}</td>
                                <td style="background-color: #DBEEF4">المجموع</td>
                            </tr>
                        </tbody>
                    </table></center>
            </div>
        </div>
@endsection
