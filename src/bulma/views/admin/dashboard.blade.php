@extends('admin.layouts.admin')

@section('content')

    <section class="hero">
        <div class="hero-body">
            <div class="box">
                <nav class="level">
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">PHP</p>
                            <p class="title">{{ $system['php_version'] }}</p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">MySql</p>
                            <p class="title">{{ $system['mysql_version'] }}</p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Node.js</p>
                            <p class="title">{{ $system['node_version'] }}</p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Composer</p>
                            <p class="title">{{ $system['composer_version'] }}</p>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>


@endsection
