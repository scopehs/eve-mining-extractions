@extends('layouts.admin.master')

@section('title')Plug in
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Plugin DataTable</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Data Tables</li>
		<li class="breadcrumb-item active">Plug in</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <!-- DOM / jQuery  Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>API plug-in methods</h5>
	                    <span>The example below shows DataTables loading data for a table from arrays as the data source, where the structure of the row's data source in this example is:</span>
	                </div>
	                <div class="card-body">
	                    <div class="dt-plugin-buttons"></div>
	                    <div class="table-responsive">
	                        <table class="display datatables" id="dt-plugin-method">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- DOM / jQuery  Ends-->
	        <!-- Column rendering  Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Ordering plug-ins (with type detection)</h5>
	                    <span>This example shows ordering with using an enumerated type.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered nowrap" id="datatable-ordering">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>Medium</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>Medium</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>Medium</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>Medium</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>High</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>High</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>High</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>Medium</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>High</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>Medium</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>Medium</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>Medium</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>Low</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>Low</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Column rendering Ends-->
	        <!-- Multiple table control elements  Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Custom filtering - range search</h5>
	                    <span>This example shows a search being performed on the age column in the data, based upon two inputs.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive dataTables_wrapper me-0">
	                        <table>
	                            <tbody class="dataTables_filter">
	                                <tr>
	                                    <td>Minimum age:</td>
	                                    <td>
	                                        <input class="form-control" id="min" type="search" name="min" />
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Maximum age:</td>
	                                    <td>
	                                        <input class="form-control" id="max" type="search" name="max" />
	                                    </td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                    <div class="table-responsive">
	                        <table class="display" id="datatable-range">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Multiple table control elements Ends-->
	        <!-- Complex headers with column visibility Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Live DOM ordering</h5>
	                    <span>
	                        This example shows how you can use information available in the DOM to order columns. Typically DataTables will read information to be ordered during it's initialisation phase, and this will not be updated based on
	                        user interaction, so ordering on columns which have, for example, form elements in them, may not reflect the current value of the input. To overcome this problem, you must update the data that DataTables will order
	                        on, just prior to the order. This method is much more efficient than actually ordering using the DOM, since only one DOM query is needed for each cell to be ordered.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered nowrap" id="datatable-livedom">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Age</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>
	                                        <input class="form-control" id="row-1-age" type="text" name="row-1-age" value="61" />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-1-position" type="text" name="row-1-position" value="System Architect" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-1-office" size="1" name="row-1-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>
	                                        <input class="form-control" id="row-2-age" type="text" name="row-2-age" value="63" />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-2-position" type="text" name="row-2-position" value="Accountant" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-2-office" size="1" name="row-2-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo" selected="selected">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>
	                                        <input class="form-control" id="row-3-age" type="text" name="row-3-age" value="66" />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-3-position" type="text" name="row-3-position" value="Junior Technical Author" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-3-office" size="1" name="row-3-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>
	                                        <input class="form-control" id="row-4-age" type="text" name="row-4-age" value="22 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-4-position" type="text" name="row-4-position" value="Senior Javascript Developer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-4-office" size="1" name="row-4-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>
	                                        <input class="form-control" id="row-5-age" type="text" name="row-5-age" value="33 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-5-position" type="text" name="row-5-position" value="Accountant" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-5-office" size="1" name="row-5-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo" selected="selected">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>
	                                        <input class="form-control" id="row-6-age" type="text" name="row-6-age" value="61" />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-6-position" type="text" name="row-6-position" value="Integration Specialist" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-6-office" size="1" name="row-6-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>
	                                        <input class="form-control" id="row-7-age" type="text" name="row-7-age" value="59 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-7-position" type="text" name="row-7-position" value="Sales Assistant" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-7-office" size="1" name="row-7-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>
	                                        <input class="form-control" id="row-8-age" type="text" name="row-8-age" value="55 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-8-position" type="text" name="row-8-position" value="Integration Specialist" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-8-office" size="1" name="row-8-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo" selected="selected">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>
	                                        <input class="form-control" id="row-9-age" type="text" name="row-9-age" value="39 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-9-position" type="text" name="row-9-position" value="Javascript Developer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-9-office" size="1" name="row-9-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>
	                                        <input class="form-control" id="row-10-age" type="text" name="row-10-age" value="23 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-10-position" type="text" name="row-10-position" value="Software Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-10-office" size="1" name="row-10-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>
	                                        <input class="form-control" id="row-11-age" type="text" name="row-11-age" value="30 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-11-position" type="text" name="row-11-position" value="Office Manager" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-11-office" size="1" name="row-11-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>
	                                        <input class="form-control" id="row-12-age" type="text" name="row-12-age" value="22 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-12-position" type="text" name="row-12-position" value="Support Lead" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-12-office" size="1" name="row-12-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>
	                                        <input class="form-control" id="row-13-age" type="text" name="row-13-age" value="36 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-13-position" type="text" name="row-13-position" value="Regional Director" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-13-office" size="1" name="row-13-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>
	                                        <input class="form-control" id="row-14-age" type="text" name="row-14-age" value="43 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-14-position" type="text" name="row-14-position" value="Senior Marketing Designer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-14-office" size="1" name="row-14-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>
	                                        <input class="form-control" id="row-15-age" type="text" name="row-15-age" value="19 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-15-position" type="text" name="row-15-position" value="Regional Director" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-15-office" size="1" name="row-15-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>
	                                        <input class="form-control" id="row-16-age" type="text" name="row-16-age" value="66 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-16-position" type="text" name="row-16-position" value="Marketing Designer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-16-office" size="1" name="row-16-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>
	                                        <input class="form-control" id="row-17-age" type="text" name="row-17-age" value="64 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-17-position" type="text" name="row-17-position" value="Chief Financial Officer (CFO)" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-17-office" size="1" name="row-17-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>
	                                        <input class="form-control" id="row-18-age" type="text" name="row-18-age" value="59 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-18-position" type="text" name="row-18-position" value="Systems Administrator" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-18-office" size="1" name="row-18-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>
	                                        <input class="form-control" id="row-19-age" type="text" name="row-19-age" value="41 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-19-position" type="text" name="row-19-position" value="Software Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-19-office" size="1" name="row-19-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>
	                                        <input class="form-control" id="row-20-age" type="text" name="row-20-age" value="35 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-20-position" type="text" name="row-20-position" value="Personnel Lead" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-20-office" size="1" name="row-20-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>
	                                        <input class="form-control" id="row-21-age" type="text" name="row-21-age" value="30 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-21-position" type="text" name="row-21-position" value="Development Lead" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-21-office" size="1" name="row-21-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>
	                                        <input class="form-control" id="row-22-age" type="text" name="row-22-age" value="40 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-22-position" type="text" name="row-22-position" value="Chief Marketing Officer (CMO)" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-22-office" size="1" name="row-22-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>
	                                        <input class="form-control" id="row-23-age" type="text" name="row-23-age" value="21 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-23-position" type="text" name="row-23-position" value="Pre-Sales Support" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-23-office" size="1" name="row-23-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>
	                                        <input class="form-control" id="row-24-age" type="text" name="row-24-age" value="23 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-24-position" type="text" name="row-24-position" value="Sales Assistant" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-24-office" size="1" name="row-24-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>
	                                        <input class="form-control" id="row-25-age" type="text" name="row-25-age" value="47 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-25-position" type="text" name="row-25-position" value="Chief Executive Officer (CEO)" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-25-office" size="1" name="row-25-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>
	                                        <input class="form-control" id="row-26-age" type="text" name="row-26-age" value="42 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-26-position" type="text" name="row-26-position" value="Developer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-26-office" size="1" name="row-26-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>
	                                        <input class="form-control" id="row-27-age" type="text" name="row-27-age" value="28 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-27-position" type="text" name="row-27-position" value="Regional Director" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-27-office" size="1" name="row-27-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>
	                                        <input class="form-control" id="row-28-age" type="text" name="row-28-age" value="28 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-28-position" type="text" name="row-28-position" value="Software Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-28-office" size="1" name="row-28-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>
	                                        <input class="form-control" id="row-29-age" type="text" name="row-29-age" value="48 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-29-position" type="text" name="row-29-position" value="Chief Operating Officer (COO)" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-29-office" size="1" name="row-29-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>
	                                        <input class="form-control" id="row-30-age" type="text" name="row-30-age" value="20 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-30-position" type="text" name="row-30-position" value="Regional Marketing" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-30-office" size="1" name="row-30-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo" selected="selected">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>
	                                        <input class="form-control" id="row-31-age" type="text" name="row-31-age" value="37 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-31-position" type="text" name="row-31-position" value="Integration Specialist" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-31-office" size="1" name="row-31-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>
	                                        <input class="form-control" id="row-32-age" type="text" name="row-32-age" value="53 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-32-position" type="text" name="row-32-position" value="Developer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-32-office" size="1" name="row-32-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>
	                                        <input class="form-control" id="row-33-age" type="text" name="row-33-age" value="27 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-33-position" type="text" name="row-33-position" value="Technical Author" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-33-office" size="1" name="row-33-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>
	                                        <input class="form-control" id="row-34-age" type="text" name="row-34-age" value="22 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-34-position" type="text" name="row-34-position" value="Team Leader" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-34-office" size="1" name="row-34-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>
	                                        <input class="form-control" id="row-35-age" type="text" name="row-35-age" value="46 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-35-position" type="text" name="row-35-position" value="Post-Sales support" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-35-office" size="1" name="row-35-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>
	                                        <input class="form-control" id="row-36-age" type="text" name="row-36-age" value="47 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-36-position" type="text" name="row-36-position" value="Marketing Designer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-36-office" size="1" name="row-36-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>
	                                        <input class="form-control" id="row-37-age" type="text" name="row-37-age" value="51 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-37-position" type="text" name="row-37-position" value="Office Manager" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-37-office" size="1" name="row-37-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>
	                                        <input class="form-control" id="row-38-age" type="text" name="row-38-age" value="41 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-38-position" type="text" name="row-38-position" value="Secretary" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-38-office" size="1" name="row-38-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>
	                                        <input class="form-control" id="row-39-age" type="text" name="row-39-age" value="62 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-39-position" type="text" name="row-39-position" value="Financial Controller" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-39-office" size="1" name="row-39-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>
	                                        <input class="form-control" id="row-40-age" type="text" name="row-40-age" value="37 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-40-position" type="text" name="row-40-position" value="Office Manager" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-40-office" size="1" name="row-40-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>
	                                        <input class="form-control" id="row-41-age" type="text" name="row-41-age" value="65 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-41-position" type="text" name="row-41-position" value="Director" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-41-office" size="1" name="row-41-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>
	                                        <input class="form-control" id="row-42-age" type="text" name="row-42-age" value="64 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-42-position" type="text" name="row-42-position" value="Support Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-42-office" size="1" name="row-42-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>
	                                        <input class="form-control" id="row-43-age" type="text" name="row-43-age" value="38 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-43-position" type="text" name="row-43-position" value="Software Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-43-office" size="1" name="row-43-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>
	                                        <input class="form-control" id="row-44-age" type="text" name="row-44-age" value="37 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-44-position" type="text" name="row-44-position" value="Support Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-44-office" size="1" name="row-44-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo" selected="selected">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>
	                                        <input class="form-control" id="row-45-age" type="text" name="row-45-age" value="61 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-45-position" type="text" name="row-45-position" value="Developer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-45-office" size="1" name="row-45-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>
	                                        <input class="form-control" id="row-46-age" type="text" name="row-46-age" value="47 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-46-position" type="text" name="row-46-position" value="Support Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-46-office" size="1" name="row-46-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>
	                                        <input class="form-control" id="row-47-age" type="text" name="row-47-age" value="64 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-47-position" type="text" name="row-47-position" value="Data Coordinator" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-47-office" size="1" name="row-47-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>
	                                        <input class="form-control" id="row-48-age" type="text" name="row-48-age" value="63 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-48-position" type="text" name="row-48-position" value="Software Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-48-office" size="1" name="row-48-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>
	                                        <input class="form-control" id="row-49-age" type="text" name="row-49-age" value="56 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-49-position" type="text" name="row-49-position" value="Software Engineer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-49-office" size="1" name="row-49-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>
	                                        <input class="form-control" id="row-50-age" type="text" name="row-50-age" value="43 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-50-position" type="text" name="row-50-position" value="Junior Javascript Developer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-50-office" size="1" name="row-50-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>
	                                        <input class="form-control" id="row-51-age" type="text" name="row-51-age" value="46 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-51-position" type="text" name="row-51-position" value="Sales Assistant" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-51-office" size="1" name="row-51-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>
	                                        <input class="form-control" id="row-52-age" type="text" name="row-52-age" value="47 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-52-position" type="text" name="row-52-position" value="Regional Director" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-52-office" size="1" name="row-52-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>
	                                        <input class="form-control" id="row-53-age" type="text" name="row-53-age" value="21 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-53-position" type="text" name="row-53-position" value="Systems Administrator" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-53-office" size="1" name="row-53-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London" selected="selected">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>
	                                        <input class="form-control" id="row-54-age" type="text" name="row-54-age" value="30 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-54-position" type="text" name="row-54-position" value="Developer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-54-office" size="1" name="row-54-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco" selected="selected">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>
	                                        <input class="form-control" id="row-55-age" type="text" name="row-55-age" value="51 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-55-position" type="text" name="row-55-position" value="Regional Director" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-55-office" size="1" name="row-55-office">
	                                            <option value="Edinburgh" selected="selected">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>
	                                        <input class="form-control" id="row-56-age" type="text" name="row-56-age" value="29 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-56-position" type="text" name="row-56-position" value="Javascript Developer" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-56-office" size="1" name="row-56-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>
	                                        <input class="form-control" id="row-57-age" type="text" name="row-57-age" value="27 " />
	                                    </td>
	                                    <td>
	                                        <input class="form-control" id="row-57-position" type="text" name="row-57-position" value="Customer Support" />
	                                    </td>
	                                    <td>
	                                        <select class="form-control" id="row-57-office" size="1" name="row-57-office">
	                                            <option value="Edinburgh">Edinburgh</option>
	                                            <option value="London">London</option>
	                                            <option value="New York" selected="selected">New York</option>
	                                            <option value="San Francisco">San Francisco</option>
	                                            <option value="Tokyo">Tokyo</option>
	                                        </select>
	                                    </td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Age</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
	@endpush

@endsection