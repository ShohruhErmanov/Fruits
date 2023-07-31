@extends('layouts.site')

@section('js')

<script>

    const deadline = '2023 08 12'

function getTimeRemaining(endtime) {
    const timer = Date.parse(endtime) - Date.parse(new Date()),
        days = Math.floor(timer / (1000 * 60 * 60 * 24)),
        hours = Math.floor((timer / (1000 * 60 * 60)) % 24),
        minuts = Math.floor((timer / 1000 / 60) % 60),
        seconds = Math.floor((timer / 1000) % 60)

    return { timer, days, hours, minuts, seconds }

}

function setClock(selector, endtime) {
    const timer = document.querySelector(selector),
        days = document.querySelector('#days'),
        hours = document.querySelector('#hours'),
        minuts = document.querySelector('#mins'),
        seconds = document.querySelector('#secs'),

        timeInterval = setInterval(updatClock, 1000)

    updatClock()

    function updatClock() {
        const t = getTimeRemaining(endtime)

        days.innerHTML = t.days
        hours.innerHTML = t.hours
        minuts.innerHTML = t.minuts
        seconds.innerHTML = t.seconds

        if (t.timer <= 0) {
            clearInterval(timeInterval)
        }
    }
    console.log(days);

}

setClock('.time-counter', deadline)

</script>

@endsection

@section('title')
Fruitkha
@endsection
@section('content')

@include('sections.header')
@include('sections.features')
@include('sections.product')
@include('sections.banner')
@include('sections.testimons')
@include('sections.advertisement')
@include('sections.shopbanner')
@include('sections.latestnew')
@include('sections.logo')

@endsection

