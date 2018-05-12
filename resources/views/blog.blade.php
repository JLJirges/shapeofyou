@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Blog</title>
@endsection

@section('content')
    <div class="h1_bg">


    </div>

    <div class="blog_entry">

        <div class="blog_box">
            <div class="workout_entry_setting">
                <span class="fav_icon"></span>
                <h1>UNDER THE SEA - THE TRUTH ABOUT SEA FOOD</h1>
            </div>

            <div>
                <img src="{{ asset('images/blogs/seafood/title_image.png')}}" alt="blog hero image">

                <div class="blog_text">

                    <p>Seafood got a bad rep. It's said to contain mercury, which is poisonous to the body in greater
                        amounts. If the seafood is held in special farms, it may have some mysterious diseases. Still,
                        seafood definitely deserves to be part of everyone's diet. Because the road from the nets in the
                        ocean onto your plate is tough as nails, and there's a lot to learn and discover about seafood
                        and it definitely does contain healthy benefits.</p>
                    <p>Take lobsters for example. Their claws aren't identical. One is bigger than the other, and the
                        bigger one is also the bigger problem. It can exert up to 100 pounds of pressure, which as you
                        can imagine, does not bode well for any fisher's fingers. Gathering the seafood is actually
                        really dangerous, and definitely requires some care. By the way, did you know that lobsters used
                        to be lowly peasant food in colonial New England? Hard to believe nowawadays, where good lobster
                        can be very expensive.</p>
                    <img src="{{ asset('images\blogs\seafood\second_blog_image.png')}}" alt="second blog image">
                    <p>If you're a fan of both pearls, and oysters, then here are some good news for you. The edible
                        oysters served as dishes, are not the oysters that produce pearls. Wouldn't make sense anyways,
                        would it? If we all had the choice between pearls and oysters...well we might go for the yummy
                        oysters. </p>
                    <p>Fish lovers might want to really make sure the fish labelled as a red snapper, is actually a red
                        snapper. Turns out that 33% of supposed red snapper fish are something else entirely. Whether
                        that's mislabeled on purpose or by accident is not clear, but it always pays off to inform
                        yourself about how the fish is supposed to actually look like. No, just because the fish is red,
                        doesn't mean it's the red snapper you're looking for. If you've bought a red snapper, and it's
                        actually a red snapper? Congratulations! The next step would be to determine whether the fish is
                        actually fresh or not. There's an easy way to test this. Place the fish inside a bowl of water.
                        If it swims on the surface, it's fresh! If it sinks to the floor, it's not. Eating fish pays off
                        too. Fish contain omega-3 fatty acids, which is definitely the good kind of fat your body
                        wants.</p>
                    <p>For an extra vitamin boost, we recommend kelp. Kelp can be eaten in many ways. It can even be
                        turned into powder. It's ripe with vitamin A, B-12, B-6 and C. It also contains iron, calcium
                        and magnesium. Besides, kelp shakes are delicious. That's a known fact.</p>
                </div>
            </div>
        </div>


    </div>

    <div class="blog_author_section">
        <div class="blog_abouttheauthor">
            <h4>About the author</h4>
            <div class="blog_abouttheauthor_content">

                <img alt="blogger image" src="{{ asset('images/aboutus/Lea.png') }}">

                <div class="blog_abouttheauthor_content_info">
                    <div>
                        <h5>Name</h5>
                        <p>Lea Schächter</p>
                    </div>
                    <div>
                        <h5>Birthday</h5>
                        <p>August 3rd, 1993</p>
                    </div>
                    <div>
                        <h5>Origin</h5>
                        <p>Austria | Vienna</p>
                    </div>
                </div>
            </div>
            <div class="blog_abouttheauthor_content_bio">
                <h5>Biography</h5>
                <p>As a half German half Austrian, jewish girl, Lea Schächter was bron and raised as a pure mix between
                    cultures. She gratuated at the age of 18, did a Diploma in Comics and Animation and studies
                    journalism. Because of her mother - who was working as a translator for some years - Lea's
                    mothertongue ist German, but she is also fluent in English, Hebrew and French.</p>
            </div>
        </div>
    </div>

    <div class="comments_section">
        <ul class="comments_section_interaction tabs">
            <li class="tab-link shown_tab" data-tab="comment-tab-1"><h5>Read Comments</h5></li>
            <li class="tab-link" data-tab="comment-tab-2"><h5>Write a Comment</h5></li>
            <li class="tab-link" data-tab="comment-tab-3"><h5>Hide Comments</h5></li>
        </ul>
        <div class="tab-content shown_tab" id="comment-tab-1">

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
        <div  class="tab-content" id="comment-tab-2">
            <form class="comment_form" method="post" action="">
                <h2>Leave a Comment</h2>
                <label>Write your comment</label>
                <input type="text" name="comment" placeholder="I will be your comment...">
                <button class="comment_button">Add Comment</button>
            </form>
        </div>
        <div class="tab-content" id="comment-tab-3"></div>
    </div>
@endsection