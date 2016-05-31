@extends('home.layouts.master')

@section('content')

  <section id="blog" class="light-bg">
    <div class="container inner-top-sm inner-bottom">

      <div class="row">
        <div class="col-md-8 center-block">
          <h1>Send in your application</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum voluptas aspernatur, sapiente illo, est. Fugiat itaque velit quo, possimus nulla, ipsa quisquam debitis ex dolores, voluptas porro.</p>
          </div>
        </div><!-- /.grid-blog -->
        </div><!-- /.col -->
      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>

  <section>
    <div class="container inner-top-sm inner-bottom">
      <div class="row">
        <div class="col-md-8 center-block">
          <div class="form">
            <form id="contact_form" action="{{ URL::route('post-apply') }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="posting_id" value="0">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label for="email">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label for="experience">Experience</label>
                <select name="experience" id="">
                  <option value="1">1 year</option>
                  @for ($i = 2; $i < 31; $i++)
                    <option value="{{ $i }}">{{ $i }} year</option>
                  @endfor
                  <option value="30+">30+ years</option>
                </select>
              </div>
              <div class="form-group">
                <label for="functional_area">Functional Area</label>
                <select name="functional_area" id="">
                  <option value="Accounting">Accounting</option>
                  <option value="Tax">Tax</option>
                  <option value="Company Secretary">Company Secretary</option>
                  <option value="Audit">Audit</option>
                  <option value="Agent">Agent</option>
                  <option value="Airline">Airline</option>
                  <option value="Reservations ">Reservations </option>
                  <option value="Ticketing">Ticketing</option>
                  <option value="Travel">Travel</option>
                  <option value="Analytics & Business Intelligence">Analytics & Business Intelligence</option>
                  <option value="Anchoring ">Anchoring </option>
                  <option value="TV">TV</option>
                  <option value="Films">Films</option>
                  <option value="Production">Production</option>
                  <option value="Architects">Architects</option>
                  <option value="Interior Design">Interior Design</option>
                  <option value="Naval Arch.">Naval Arch.</option>
                  <option value="Art Director">Art Director</option>
                  <option value="Graphic">Graphic</option>
                  <option value="Web Designer">Web Designer</option>
                  <option value="Banking">Banking</option>
                  <option value="Insurance">Insurance</option>
                  <option value="Content">Content</option>
                  <option value="Editors">Editors</option>
                  <option value="Journalists">Journalists</option>
                  <option value="Corporate Planning">Corporate Planning</option>
                  <option value="Consulting">Consulting</option>
                  <option value="Strategy">Strategy</option>
                  <option value="Entrepreneur">Entrepreneur</option>
                  <option value="Businessman">Businessman</option>
                  <option value="Outside Management Consultant">Outside Management Consultant</option>
                  <option value="Export">Export</option>
                  <option value="Import">Import</option>
                  <option value="Fashion">Fashion</option>
                  <option value="Front Office Staff">Front Office Staff</option>
                  <option value="Secretarial">Secretarial</option>
                  <option value="Computer Operator">Computer Operator</option>
                  <option value="Hotels / Restaurant Management">Hotels / Restaurant Management</option>
                  <option value="Human Resource (HR)">Human Resource (HR)</option>
                  <option value="Admin">Admin</option>
                  <option value="Personnel Management (PM)">Personnel Management (PM)</option>
                  <option value="Industrial Relation (IR)">Industrial Relation (IR)</option>
                  <option value="Training">Training</option>
                  <option value="ITES">ITES</option>
                  <option value="BPO">BPO</option>
                  <option value="Operations">Operations</option>
                  <option value="Customer Service">Customer Service</option>
                  <option value="Telecalling">Telecalling</option>
                  <option value="Legal / Law">Legal / Law</option>
                  <option value="Medical Professional">Medical Professional</option>
                  <option value="Healthcare Practitioner">Healthcare Practitioner</option>
                  <option value="Technician">Technician</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Advertising ">Advertising </option>
                  <option value="Medical Representative (MR)">Medical Representative (MR)</option>
                  <option value="Media Planning">Media Planning</option>
                  <option value="Public Relation (PR)">Public Relation (PR)</option>
                  <option value="Corp. Comm.">Corp. Comm.</option>
                  <option value="Packaging Development">Packaging Development</option>
                  <option value="Production">Production</option>
                  <option value="Service Engineering">Service Engineering</option>
                  <option value="Manufacturing ">Manufacturing </option>
                  <option value="Maintenance">Maintenance</option>
                  <option value="Project Management">Project Management</option>
                  <option value="Site Engineers">Site Engineers</option>
                  <option value="Purchase">Purchase</option>
                  <option value="SCM">SCM</option>
                  <option value="R&D">R&D</option>
                  <option value="Engineering Design">Engineering Design</option>
                  <option value="Sales">Sales</option>
                  <option value="Business Development">Business Development</option>
                  <option value="Client Servicing">Client Servicing</option>
                  <option value="Security">Security</option>
                  <option value="Shipping">Shipping</option>
                  <option value="Software Development – ALL New">Software Development – ALL New</option>
                  <option value="Software Development - Application Programming">Software Development - Application Programming</option>
                  <option value="Software Development - Client Server">Software Development - Client Server</option>
                  <option value="Software Development - Database Administration">Software Development - Database Administration</option>
                  <option value="Software Development - e-commerce / Internet Technologies">Software Development - e-commerce / Internet Technologies</option>
                  <option value="Software Development - Embedded Technologies">Software Development - Embedded Technologies</option>
                  <option value="Software Development - ERP / CRM">Software Development - ERP / CRM</option>
                  <option value="Software Development - Network Administration">Software Development - Network Administration</option>
                  <option value="Software Development - Others">Software Development - Others</option>
                  <option value="Software Development - QA and Testing">Software Development - QA and Testing</option>
                  <option value="Software Development - System Programming">Software Development - System Programming</option>
                  <option value="Software Development - Telecom Software">Software Development - Telecom Software</option>
                  <option value="Software Development - Systems / EDP / MIS">Software Development - Systems / EDP / MIS</option>
                  <option value="Teaching / Education / Language Specialist">Teaching / Education / Language Specialist</option>
                  <option value="Telecom / IT-Hardware / Tech. Staff / Support">Telecom / IT-Hardware / Tech. Staff / Support</option>
                  <option value="Top Management">Top Management</option>
                  <option value="Any Other">Any Other</option>
                </select>
              </div>
               <div class="form-group">
                <label for="industry">Industry</label>
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

              <div class="form-group">
                <label for="education">Education</label>
                <select name="education" id="">
                  <option value="Graduate">Graduate</option>
                  <option value="Post Graduate">Post Graduate</option>
                  <option value="Others">Others</option>
                </select>
              </div>

              <div class="form-group">
                <label for="salary">Annual Salary</label>
                <select name="salary" id="">
                  @for ($i = 1; $i < 51; $i++)
                    <option value="{{ $i }} - {{ $i+1 }}">{{ $i }} - {{ $i+1 }} lakhs</option>
                  @endfor
                  <option value="{{ $i }} - {{ $i+1 }}">50 lakhs +</option>
                </select>
              </div>

              <div class="form-group">
                <label for="message">Cover letter</label>
                <textarea id="message" name="description" style="min-height: none;"></textarea>
              </div>
              <div class="form-group">
                <label for="cv">Upload your CV</label>
                <input type="file" name="cv" required>
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <select name="location" id="">
                  <option value="Anywhere in India">Anywhere in India</option>
                  <option value="Anywhere in Northern India">Anywhere in Northern India</option>
                  <option value="Anywhere in South India">Anywhere in South India</option>
                  <option value="Anywhere in West India">Anywhere in West India</option>
                  <option value="Anywhere in East India">Anywhere in East India</option>
                  <option value="Any International Location">Any International Location</option>
                  <option value="National Locations">National Locations</option>
                  <option value="Ahmedabad">Ahmedabad</option>
                  <option value="Bengaluru/Bangalore">Bengaluru/Bangalore</option>
                  <option value="Kolkata">Kolkata</option>
                  <option value="Chennai">Chennai</option>
                  <option value="Delhi/NCR">Delhi/NCR</option>
                  <option value="Hyderabad">Hyderabad</option>
                  <option value="Mumbai (All Areas)">Mumbai (All Areas)</option>
                  <option value="Pune">Pune</option>
                </select>
              </div>

              <button type="submit" class="btn btn-default">Apply</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================= SECTION – BLOG : END ============================================================= -->
@stop