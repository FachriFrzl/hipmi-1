@extends('layouts.frontapp', ['title' => 'Karir'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/career.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">KARIR</h1>
        </div>
    </section>
    @include('front.component.profile_menu')
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{asset('assets/img/grad-school-applications-1200-1200x794.jpg')}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eius eos magni incidunt veniam, maiores dolore mollitia architecto. Illo enim beatae dignissimos quia eaque quisquam animi vel repellendus commodi sunt. Quod quia et asperiores, dolores eligendi optio veritatis ex tempore, sed facilis illo deserunt quisquam nobis, corporis repellendus doloremque maxime soluta officia cumque natus maiores voluptate ipsa eveniet? Voluptates doloribus hic unde fugit, maxime quaerat eaque consequuntur consectetur velit perspiciatis voluptate dicta ut dolores harum sequi natus, ratione ducimus necessitatibus optio id reiciendis accusantium perferendis? Amet tempore neque, distinctio aut dolore a iste minus dolorum, sunt fuga magnam, aliquid laudantium!</p>
                    <br>
                    <a href="mailto:allathif.sch@gmail.com" class="btn btn-green">Email: hipmi@gmail.com</a>
                </div>
            </div>
            
        </div>
    </section>

@endsection