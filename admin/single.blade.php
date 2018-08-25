@extends('admin.layout')



@section('admincontent')
	<single-campagn :events="'{{ json_encode($data) }}'" :channels="'{{ json_encode($channelsArr) }}'" :placements="'{{ json_encode($placements) }}'" :step_slot="'{{$step_slot}}'" :min_timeslot="'{{$min_timeslot}}'" :max_timeslot="'{{$max_timeslot}}'" :default_date="'{{json_encode($defaultDate)}}'" :asked_obtained_slots="'{{json_encode($askedObtainedSlots)}}'" :key_order="'{{$key_order}}'"></single-campagn>
@endsection