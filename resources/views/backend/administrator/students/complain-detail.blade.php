@extends('layouts.master')
@section('title', 'Complain-detail')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="card-header p-4">
                <h3 class="float-left">
                    Complain Detail
                </h3>
            </div>
            <div class="card text-center bg-warning text-white">
                <div class="card-body">
                    
                    <Div class="container p-5">
                        <h2 class="text-center text-light" id="noticeTitle" name="noticeTitle">
                            {{ $complain['title'] }}
                        </h2>

                        <h4 class="text-danger">
                            Posted at: {{ $complain['created_at'] }} -- Name : {{ $complain->user->name }}
                        </h4>

                        <br>
                        <p class="text-start" id="generalNotice" id="noticeDescription" name="noticeDescription">
                            {{ $complain['description'] }}
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
