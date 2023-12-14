@extends('template.main')

@section('body')

<div class="row container-fluid mx-auto mt-3">
  <div class="col-sm-7 cart">
      <h3>Cart List</h3>
      <div class="cart-list-wrapper border">
        <div class="cart-list">
          <table class="table">
            <tbody>
              <form action="/purchase" method="post" class="co-form">
                @csrf
                  @foreach ($carts as $cart)
                  <input type="hidden" name="product_id[]" id="product_id" value="{{ $cart->product->id }}">
                  <input type="hidden" name="total[]" class="total-item">
                    <tr>
                      <td class="product-name">{{ $cart->product->product_name }}</td>
                      <td class="product-price">{{ $cart->product->price }}</td>
                      <td class="qty-input">
                          <div>
                              <button type="" class="min"><i class="bi bi-dash-lg"></i></button>
                              <input type="number" class="quantity" value="1" name="qty[]">
                              <button class="plus"><i class="bi bi-plus"></i></button>
                          </div>
                      </td>
                      <td class="total"></td>
                      <td class="del">
                          <button type="submit">
                            <i class="bi bi-trash"></i>
                          </button>
                      </td>
                    </tr>
                  @endforeach
              </form>
            </tbody>
          </table>
        </div>
        
        <div class="cart-total">
          <div class="total-items">
            <p>Total items : 2</p>
          </div>
          <div class="subtotal">
            <div>
              <h1>Subtotal : </h1>
              <h1 id="subtotal">640.000</h1>
            </div>

            <div class="action">
              <form action="/cart/reset" method="post">
                @csrf
                <button type="submit" class="reset">Reset</button>
              </form>
              <button class="co" id="co">Checkout</button>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="col-sm product">
      <h3>Product List</h3>
      <div class="form">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> 
      </div>
      <div class="row product-list-wrapper border">
        @foreach ($products as $product)
          <div class="col-sm-2 p-0">
            <form action="/cart" method="post" class="add-to-cart">
                @csrf
                  <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                <div class="card">
                  <img src="/img/noPict.jpg" class="card-img-top" alt="...">
                  <div class="card-body p-1 text-center">
                    <p>{{ $product->product_name }}</p>
                    <p class="price"><b>{{ $product->price }}</b></p>
                  </div>
                </div>
            </form>
          </div>
        @endforeach
      </div>
  </div>
</div>    

@endsection