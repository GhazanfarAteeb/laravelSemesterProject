@extends('layouts.EventDetail')
@section('selected_page','Special Eves')
@section('Content')
<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <!-- Title-->
            <h1 class="mt-4">Special eve</h1>

            <!-- Preview image-->
            {{-- <img class="img-fluid rounded" src="/assets/wedding/banner-wedding.jpg" alt="..." /> --}}
            <hr />
            <!-- Post content-->
            <h2>What is a Special Event?</h2>
            <div class="container">
                <div class="row">
                    <p class="text-justify col-lg-8 col-md-8">The special events sector of the industry broadly consists of private events,
                        sporting events,
                        public events, and fairs
                        & festivals. They are considered ‘special’ events because they are outside of the host’s normal business, program,
                        or
                        activity.

                        Special events are generally hospitality or entertainment-based, and are therefore of a social, rather than
                        business,
                        nature. That’s not to say they don’t still have business objectives; while some are purely celebratory, many are
                        held
                        for the purpose of marketing, advertising, promotion, and sales.

                        Each of these broad categories within special events is actually made up of many different types of events. Let’s
                        look
                        at each one individually.
                    </p>
                    <img src="/assets/Special-eve/special-eve.jpeg" class="col-lg-4 col-md-4" alt="">
                </div>
            </div>
            <hr/>
            <h2>Different Types of Special Events</h2>
            <h4>Brand Communication Events </h4>
            <p class="text-justify">Certain types of brand communications events are private events, such as retail events, launches, fashion shows, award
            ceremonies, openings, and premieres. These are, for the most part, held for invited guests only. So while brand events
            make up their own sector of the event industry, they sit under the umbrella of special events; some in the private
            events category and others, as we’ll see below, in public events or fairs & festivals.</p>
            <h4>Charity / Non-Profit Events</h4>
            <p class="text-justify">Similarly, charity events and fundraisers make up another large sector of the events industry, but
                these also come under the umbrella of special events. Some, such as gala dinners, are private events aimed at a particular
                group of major donors, while others, as we see below, are public or sporting events, such as bike rides and marathons.
                Therefore, private events can be used to encompass many different types of events; from parties and celebrations, to
                brand marketing, promotional, and launch events, and also fundraisers and charity galas—all of which are considered private
                special events.</p>
            <hr />
            <h4>Brand Owned Festivals</h4>
            <div class="container">
                <div class="row">
                    <p class="text-justify col-lg-8 col-md-8">
                        Similarly, many fairs and festivals, such as Innocent Smoothie’s Fruitstock, and Ben & Jerry’s One
                        World One Heart festival, are actually experiential / brand marketing events created specifically by brands; they just
                        use a festival format in order to market and promote their products/brand to consumers.
                        Other brands, instead of creating their own festivals, will simply sponsor existing festivals that are owned and
                        operated by a separate commercial company or organization and run as a for-profit event.
                    </p>
                    <img src="/assets/Special-eve/brand-owned.jpg" class="col-lg-4 col-md-4" alt="">
                </div>
            </div>
            <hr />
            <h4>Local Events</h4>
            <p class="text-justify">At a local level, there are also many different types of sporting events, such as boat races, rodeos, bike rides,
            marathons, and equestrian events, all of which come under the umbrella of special events.</p>
        </div>
    </div>
</div>
@endsection
