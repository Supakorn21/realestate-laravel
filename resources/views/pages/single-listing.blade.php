@extends('layouts.main')
@section('page-title', '23 Grand Ave- Tommy Realty')
@section('content')
    <div class="single-listing">
        <div class="listing-top">
              <img class="listing-top__img" src="https://buildingrva.com/wp-content/uploads/2022/05/46f4cd1f96bb040f2b2f814f8cd10caa.jpg"
               >
               <div class="form-wrapper">
                <div class="container">
                      <form class="listing-top__form" action="">
                        <label class="listing-top__form-label text-center">Schedule A Tour</label>
                        <div class="listing-top__form-group listing-top__form-group--horz">
                                <span class="listing-top__form-option">In Person</span>
                                 <span class="listing-top__form-option">Video</span>
                        </div>
                        <label class="listing-top__form-label">Date</label>
                        <div class="listing-top__form-group listing-top__form-group--horz">
                                <span class="listing-top__form-option">Febuary 22 2024</span>
                        </div>
                        <label class="listing-top__form-label">Time</label>
                        <div class="listing-top__form-group">
                                <span class="listing-top__form-option">11 AM</span>
                        </div>
                        
                        <div class="listing-top__form-group">
                                <span class="listing-top__form-option">Enter Phone</span>
                        </div>
                
                        <div class="listing-top__form-group">
                                <span class="listing-top__form-button">Enter Email</span>
                        </div>
                        <div class="listing-top__form-group">
                                <button type="submit"  class="listing-top__form-button background-orange">Submit</button>
                        </div>
                    </form>
                </div>
                  
               </div>
        </div>
        <section class="listing-info">
                <div class="container">
                        <div class="row">
                                <div class="col-md-7">
                                        <h1>23 Grand Ave <br> Miami, FL 33456</h1>
                                        <div class="listing-info__details">
                                                <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> 4 </span>
                                                <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> 3 </span>
                                                <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> 2440 SQFT </span>
                                        </div>
                                </div>
                                <div class="col-md-5">
                                        <span class="listing-info__agent-title">Agent</span>
                                        <span class="listing-info__agent-name">John Smith</span>
                                        <p class="listing-info__agent-profile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab provident neque sapiente repellendus officiis magnam exercitationem aliquam veritatis, porro ea, autem voluptate accusamus, culpa suscipit molestiae voluptatem nihil quisquam? Ut, voluptate repellendus possimus amet nesciunt eaque nulla minima, voluptatum, dolores quisquam id. Porro accusamus optio a, quae accusantium nam perspiciatis.</p>
                                </div>
                        </div>
                </div>
        </section>
        <div class="listing-extras">
                    <div class="container">
                        <div class="row">
                                <div class="col-md-7">
                                        <div class="listing-extras__details">
                                                <h2>More Info</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aut mollitia repudiandae beatae libero, error eligendi autem natus qui dolor nam cupiditate corrupti eius, iusto quod commodi, ut nulla cumque sunt porro consequatur eos officiis labore fuga. Obcaecati quisquam nam labore laborum, exercitationem reiciendis. Fugit delectus iure harum dicta quasi illum incidunt provident error doloribus autem deserunt voluptate cum esse dolor dignissimos dolores, maiores, dolorum laboriosam labore veritatis quos a! Aut deleniti esse aperiam nesciunt culpa laborum animi ipsum dolorum, natus autem vero aliquid. Doloribus, ex. Commodi ullam consectetur eius tempore. Inventore quod reprehenderit sapiente laudantium ratione magnam similique officia?</p>
                                                <h3>Details</h3>
                                                <ul>
                                                        <li>test</li>
                                                        <li>test</li>
                                                        <li>test</li>
                                                        <li>test</li>
                                                        <li>test</li>
                                                        <li>test</li>
                                                </ul>
                                        </div>
                                   
                                </div>
                                <div class="col-md-5">
                                      <div class="listing-extras__gallery">
                                        <h2>Images</h2>
                                                    <img src="https://buildingrva.com/wp-content/uploads/2022/05/46f4cd1f96bb040f2b2f814f8cd10caa.jpg" alt="">
                                      </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>
@endsection
