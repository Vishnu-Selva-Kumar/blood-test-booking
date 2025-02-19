<img src="{{ asset('storage/' . $package->image) }}" alt="">


{!! str($package->short_description)->markdown()->sanitizeHtml() !!}
