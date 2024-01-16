<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        </div class="col-md-3">
            <img src="{{ route('products.image', ['imageName' => $product->['image_url']]) }}" class="card-img-top" alt="...">
        </div>

        <div class="col-md-9">
            <h3>
                {{ product->name }}
            </h3>
            <h4>
                {{ product->price }}
            </h4>
            <div class="mt-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#description" role="tab" data-toggle="tab">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="bav-link" href="#review" role="tab" data-toggle="tab">Review</a>
                    </li>
                </ul>

                <div class="tab-content mt-2">
                    <div role="tabpanel" class="tab-pane fade in active show" id="description">
                        {{!! $product->description !!}}
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="review">
                        Content untuk review disini
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

