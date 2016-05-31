@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Career Postings</h1>
</div>

<div class="content">
	<h3 class="content-subhead">Create Career Posting</h3>
	<div class="pure-g">
		<div class="pure-u-1">
			{{ Form::open(array('route' => 'admin.postings.store', 'class' => 'pure-form pure-form-aligned','files' => true)) }}
				<fieldset>
					<div class="pure-control-group">
						{{ Form::label('Job Title', null) }}
						{{ Form::text('title', null, array('placeholder' => 'Title')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Company Name', null) }}
						{{ Form::text('company_name', null, array('placeholder' => 'Company Name')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Internal Posting') }}
						{{ Form::radio('external', '0', true) }} Yes
						{{ Form::radio('external', '1') }} No
					</div>

					<div class="pure-control-group">
						{{ Form::label('Industry') }}
						<select name="industry" id="">
              <option value="Accounting ">Accounting </option>
              <option value="Finance">Finance</option>
              <option value="Advertising">Advertising</option>
              <option value="PR">PR</option>
              <option value="MR">MR</option>
              <option value="Events">Events</option>
              <option value="Agriculture">Agriculture</option>
              <option value="Dairy">Dairy</option>
              <option value="Animation">Animation</option>
              <option value="Architecture">Architecture</option>
              <option value="Interior Design">Interior Design</option>
              <option value="Auto / Auto Ancillary">Auto / Auto Ancillary</option>
              <option value="Aviation ">Aviation </option>
              <option value="Aerospace Firm">Aerospace Firm</option>
              <option value="Banking ">Banking </option>
              <option value="Financial Services">Financial Services</option>
              <option value="Broking">Broking</option>
              <option value="BPO">BPO</option>
              <option value="ITES">ITES</option>
              <option value="Brewery">Brewery</option>
              <option value="Distillery">Distillery</option>
              <option value="Chemicals">Chemicals</option>
              <option value="PetroChemical">PetroChemical</option>
              <option value="Plastic">Plastic</option>
              <option value="Rubber">Rubber</option>
              <option value="Construction">Construction</option>
              <option value="Engineering">Engineering</option>
              <option value="Cement">Cement</option>
              <option value="Metals">Metals</option>
              <option value="Consumer Durables">Consumer Durables</option>
              <option value="Courier">Courier</option>
              <option value="Transportation">Transportation</option>
              <option value="Freight">Freight</option>
              <option value="Ceramics">Ceramics</option>
              <option value="Sanitary ware">Sanitary ware</option>
              <option value="Defence">Defence</option>
              <option value="Government">Government</option>
              <option value="Education / Teaching / Training">Education / Teaching / Training</option>
              <option value="Electricals">Electricals</option>
              <option value="Switchgears">Switchgears</option>
              <option value="Export / Import">Export / Import</option>
              <option value="Facility Management">Facility Management</option>
              <option value="Fertilizers">Fertilizers</option>
              <option value="Pesticides">Pesticides</option>
              <option value="FMCG / Foods / Beverage">FMCG / Foods / Beverage</option>
              <option value="Food Processing">Food Processing</option>
              <option value="Fresher / Trainee">Fresher / Trainee</option>
              <option value="Gems & Jewellery">Gems & Jewellery</option>
              <option value="Glass">Glass</option>
              <option value="Heat Ventilation Air Conditioning">Heat Ventilation Air Conditioning</option>
              <option value="Hotels / Restaurants">Hotels / Restaurants</option>
              <option value="Airlines / Travel">Airlines / Travel</option>
              <option value="Industrial Products">Industrial Products</option>
              <option value="Heavy Machinery">Heavy Machinery</option>
              <option value="Insurance">Insurance</option>
              <option value="IT-Software / Software Services">IT-Software / Software Services</option>
              <option value="IT-Hardware & Networking">IT-Hardware & Networking</option>
              <option value="Telecom / ISP">Telecom / ISP</option>
              <option value="KPO / Research /Analytics">KPO / Research /Analytics</option>
              <option value="Legal">Legal</option>
              <option value="Media / Dotcom / Entertainment">Media / Dotcom / Entertainment</option>
              <option value="Internet / Ecommerce">Internet / Ecommerce</option>
              <option value="Medical / Healthcare / Hospital">Medical / Healthcare / Hospital</option>
              <option value="Mining">Mining</option>
              <option value="NGO / Social Services">NGO / Social Services</option>
              <option value="Office Equipment / Automation">Office Equipment / Automation</option>
              <option value="Oil and Gas ">Oil and Gas </option>
              <option value="Power">Power</option>
              <option value="Infrastructure">Infrastructure</option>
              <option value="Energy">Energy</option>
              <option value="Paper">Paper</option>
              <option value="Pharma ">Pharma </option>
              <option value="Biotech">Biotech</option>
              <option value="Clinical Research">Clinical Research</option>
              <option value="Printing / Packaging">Printing / Packaging</option>
              <option value="Publishing">Publishing</option>
              <option value="Real Estate / Property">Real Estate / Property</option>
              <option value="Recruitment">Recruitment</option>
              <option value="Retail">Retail</option>
              <option value="Security / Law Enforcement">Security / Law Enforcement</option>
              <option value="Semiconductors / Electronics">Semiconductors / Electronics</option>
              <option value="Shipping / Marine">Shipping / Marine</option>
              <option value="Steel">Steel</option>
              <option value="Strategy /Management Consulting Firms">Strategy /Management Consulting Firms</option>
              <option value="Textiles / Garments / Accessories">Textiles / Garments / Accessories</option>
              <option value="Tyres">Tyres</option>
              <option value="Water Treatment">Water Treatment</option>
              <option value="Waste Management">Waste Management</option>
              <option value="Wellness/Fitness/Sports">Wellness/Fitness/Sports</option>
              <option value="Other">Other</option>
            </select>
					</div>

					<div class="pure-control-group">
						{{ Form::label('Description', null) }}
						{{ Form::textarea('description', null, array('placeholder' => 'Description')) }}
					</div>


					<button type="submit" class="pure-button pure-button-primary">Submit</button>

				</fieldset>

				{{ Form::close() }}
			</div>
	</div>
@stop
