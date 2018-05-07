@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Blog</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>BLOG TITLE</h1>
    </div>

    <div class="blog_entry">

        <div class="blog_box">
            <div>
                <img src="{{('../images/workout/workout_bg.png')}}" alt="diray image">

                <div class="blog_text">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                    <img src="{{('../images/workout/workout_bg.png')}}" alt="diray image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                </div>
            </div>
        </div>


    </div>

<div class="blog_author_section">
    <div class="blog_abouttheauthor">
        <h4>About the author</h4>
        <div class="blog_abouttheauthor_content">

            <img alt="blogger image" src="{{ asset('images/aboutus/Mira.jpg') }}">

            <div class="blog_abouttheauthor_content_info">
                <div>
                    <h5>Name</h5>
                    <p>Tamira Karunarathna</p>
                </div>
                <div>
                    <h5>Birthday</h5>
                    <p>May 21st, 1994</p>
                </div>
                <div>
                    <h5>Origin</h5>
                    <p>Srilanka/Germany</p>
                </div>
            </div>
        </div>
        <div class="blog_abouttheauthor_content_bio">
            <h5>Biography</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto ducimus, eaque enim eos
                eum fuga, harum libero nobis obcaecati suscipit, ullam vero. Assumenda dolore doloribus iste nisi quo
                veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto ducimus, eaque enim eos
                eum fuga, harum libero nobis obcaecati suscipit, ullam vero. Assumenda dolore doloribus iste nisi quo
                veniam.</p>
        </div>
    </div>
</div>

    <div class="comments_section">
        <div class="comments_section_interaction">
            <h5>Read Comments</h5>
            <h5>Write a Comment</h5>
            <h5>Hide Comments</h5>
        </div>
        <div class="comments_details">
            <div class="comments_details_user">

                <div class="comments_details_profilepicture">
                    <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                    <span>Username</span>
                </div>
                <span>Date</span>
                <div class="comments_details_edit">
                    <span class="delete"></span>
                    <span class="report"></span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.</p>
        </div>
        <div class="comments_details">
            <div class="comments_details_user">

                <div class="comments_details_profilepicture">
                    <img src="{{asset('images/aboutus/Remus.png')}}" alt="user profile picture">
                    <span>Username</span>
                </div>
                <span>Date</span>
                <div class="comments_details_edit">
                    <span class="delete"></span>
                    <span class="report"></span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.</p>
        </div>
        <div class="comments_details">
            <div class="comments_details_user">

                <div class="comments_details_profilepicture">
                    <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                    <span>Username</span>
                </div>
                <span>Date</span>
                <div class="comments_details_edit">
                    <span class="delete"></span>
                    <span class="report"></span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.</p>
        </div>
        <div class="comments_details">
            <div class="comments_details_user">

                <div class="comments_details_profilepicture">
                    <img src="{{asset('images/aboutus/Corinna.png')}}" alt="user profile picture">
                    <span>Username</span>
                </div>
                <span>Date</span>
                <div class="comments_details_edit">
                    <span class="delete"></span>
                    <span class="report"></span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.</p>
        </div>
        <div class="comments_details">
            <div class="comments_details_user">

                <div class="comments_details_profilepicture">
                    <img src="{{asset('images/aboutus/Remus.png')}}" alt="user profile picture">
                    <span>Username</span>
                </div>
                <span>Date</span>
                <div class="comments_details_edit">
                    <span class="delete"></span>
                    <span class="report"></span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
                dignissimos earum ex
                facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
                recusandae saepe tempora.</p>
        </div>
    </div>
@endsection