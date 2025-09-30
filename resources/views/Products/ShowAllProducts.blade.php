@include('master.header')
@foreach ($allProducts as $Product)
@endforeach

<section class="ftco-section bg-light">
    <div class="container">
        <div class="pb-3 mb-3 row justify-content-center">
            <div class="text-center col-md-12 heading-section ftco-animate">
                <h2 class="mb-4">New Shoes Arrival</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($allProducts as $Product)
                <div class="col-sm-12 col-md-6 col-lg-4 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="#" class="img-prod"><img class="img-fluid"
                                src="{{ asset('uploads/images/' . $Product->image) }}" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="px-3 py-3 pb-4 text">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>mRoonA</span>
                                </div>
                                <div class="rating">
                                    <p class="mb-0 text-right">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">{{ $Product->name }}</a></h3>
                            <div class="pricing">
                                <p class="price"><span>Price : {{ $Product->price }}</span> <span>Discount :
                                        {{ $Product->discount_price }}</span></p>
                                <p class="stock"><span>Stock : {{ $Product->stock }}</span> <span>sku :
                                        {{ $Product->sku }}</span></p>
                            </div>
                            <p class="px-3 bottom-area d-flex">
                            </form>
                            <a href="PageBuySeveralItemFromProduct-{{$Product->id}}" class="py-2 text-center buy-now">Buy now<span><i
                                        class="ml-1 ion-ios-cart"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('master.footer')
