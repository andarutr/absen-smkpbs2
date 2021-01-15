@extends('layouts.guru')

@section('title', "Aktivitas")

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      @include('partials.guru.breadcrumb')
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="activities">
              @foreach($aktivitas as $akt)
              <div class="activity">
                <div class="activity-icon bg-primary text-white shadow-primary">
                  <i class="{{ $akt->icon }}"></i>
                </div>
                <div class="activity-detail">
                  <div class="mb-2">
                    <span class="text-job text-primary">{{ $akt->date }}</span>
                  </div>
                  <p>{{ $akt->aktivitas }}</p>
                </div>
              </div>
              @endforeach
            </div>
            {{ $aktivitas->links() }}
          </div>
        </div>
      </div>
    </section>
</div>
@endsection