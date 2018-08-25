@extends('admin.layout')



@section('admincontent')
	<create-campagn :advertisers="`{{json_encode($advertisers)}}`" :channels="`{{json_encode($channelsArr)}}`" :categories="`{{json_encode($audienceCategories)}}`" :agencies="`{{json_encode($contactsFromAgency)}}`" :isagency="`{{$keyAgencycontact}}`"></create-campagn>
@endsection