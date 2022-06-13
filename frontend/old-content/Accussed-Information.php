<?php
include '../config/config.php';
include BASEPATH.'/pages/layout/header.php';
include BASEPATH.'/pages/layout/sidebar.php';
include BASEPATH.'/pages/layout/nav.php';
//die();
?>
<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->

<div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="innerPage-box">
                                    <h3 class="innerPage-head">
                                        Record Accused information
                                                                                <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                                    </h3>
                                                                        <form role="form" id="form-id" class="form-horizontal" method="POST" action="https://wlor.wildcrimeassist.in/wlors/section" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="w52l5fMv7jKUxRVpIaYdOEXgEPaKOnhSpzRedRTW">
                                        <input type="hidden" name="confession_add" value="">
                                        <input type="hidden" name="section5" value="section5">
                                                                                <input type="hidden" name="accuseCounter" id='number' value="0">
                                                                                <div class="form-row">
                                        <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                                        <div class="input_fields_wrap">
                                                                                <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Provide a brief description of what you found at the scene of crime.
                                                                                                    </label>
                                                <textarea type="text" class="form-control inner-textfield" placeholder="That the search team removed the cloth cover and discovered a partitioned iron cage containing Scheduled animals and birds identified as Parakeets in Schedule IV of the Wild Life Act, 1972." required id="" name="description_0" ></textarea>

                                            </div>
                                         <div class="form-group col-md-12">
                                                <label class="inner-label">
                                                    Status of Accused 
                                                                                                    </label>
                                                                                             <div class="form-group col-md-4">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="accusestatus_0"  id="accusestatus_0" class="part" value="Under Arrest">Under Arrest
                                                        <span class="checkmark"></span>
                                                    </label>
                                             </div>
                                             <div class="form-group col-md-4">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="accusestatus_0"  id="accusestatus_0" class="part" value="Deceased">Deceased
                                                        <span class="checkmark"></span>
                                                    </label>
                                             </div>
                                             <div class="form-group col-md-4">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="accusestatus_0"  id="accusestatus_0" class="part" value="Absconding">Absconding
                                                        <span class="checkmark"></span>
                                                    </label>
                                             </div>
                                            </div>   
                                         <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Name of Accused
                                                                                                    </label>
                                                <input type="hidden" name="manageid[]" value="0">
                                                <input type="text" class="form-control inner-textfield"  name="accused_0" required value="" >
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Accused's Father's Name
                                                                                                    </label>
                                                <input type="text" class="form-control inner-textfield"  name="father_0"  required value="" >
                                            </div>
                                              <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Age (In Years)<input type="checkbox" name="approx_0" id="approx_0" class="" value="approc">
                                                            approximately
                                                                                                    </label>
                                                <select class="form-control  inner-textfield" name="age_0" required>
                                                    <option  value="">Select Age</option>
                                                                                                            <option value="18" >18</option>
                                                                                                            <option value="19" >19</option>
                                                                                                            <option value="20" >20</option>
                                                                                                            <option value="21" >21</option>
                                                                                                            <option value="22" >22</option>
                                                                                                            <option value="23" >23</option>
                                                                                                            <option value="24" >24</option>
                                                                                                            <option value="25" >25</option>
                                                                                                            <option value="26" >26</option>
                                                                                                            <option value="27" >27</option>
                                                                                                            <option value="28" >28</option>
                                                                                                            <option value="29" >29</option>
                                                                                                            <option value="30" >30</option>
                                                                                                            <option value="31" >31</option>
                                                                                                            <option value="32" >32</option>
                                                                                                            <option value="33" >33</option>
                                                                                                            <option value="34" >34</option>
                                                                                                            <option value="35" >35</option>
                                                                                                            <option value="36" >36</option>
                                                                                                            <option value="37" >37</option>
                                                                                                            <option value="38" >38</option>
                                                                                                            <option value="39" >39</option>
                                                                                                            <option value="40" >40</option>
                                                                                                            <option value="41" >41</option>
                                                                                                            <option value="42" >42</option>
                                                                                                            <option value="43" >43</option>
                                                                                                            <option value="44" >44</option>
                                                                                                            <option value="45" >45</option>
                                                                                                            <option value="46" >46</option>
                                                                                                            <option value="47" >47</option>
                                                                                                            <option value="48" >48</option>
                                                                                                            <option value="49" >49</option>
                                                                                                            <option value="50" >50</option>
                                                                                                            <option value="51" >51</option>
                                                                                                            <option value="52" >52</option>
                                                                                                            <option value="53" >53</option>
                                                                                                            <option value="54" >54</option>
                                                                                                            <option value="55" >55</option>
                                                                                                            <option value="56" >56</option>
                                                                                                            <option value="57" >57</option>
                                                                                                            <option value="58" >58</option>
                                                                                                            <option value="59" >59</option>
                                                                                                            <option value="60" >60</option>
                                                                                                            <option value="61" >61</option>
                                                                                                            <option value="62" >62</option>
                                                                                                            <option value="63" >63</option>
                                                                                                            <option value="64" >64</option>
                                                                                                            <option value="65" >65</option>
                                                                                                            <option value="66" >66</option>
                                                                                                            <option value="67" >67</option>
                                                                                                            <option value="68" >68</option>
                                                                                                            <option value="69" >69</option>
                                                                                                            <option value="70" >70</option>
                                                                                                            <option value="71" >71</option>
                                                                                                            <option value="72" >72</option>
                                                                                                            <option value="73" >73</option>
                                                                                                            <option value="74" >74</option>
                                                                                                            <option value="75" >75</option>
                                                                                                            <option value="76" >76</option>
                                                                                                            <option value="77" >77</option>
                                                                                                            <option value="78" >78</option>
                                                                                                            <option value="79" >79</option>
                                                                                                            <option value="80" >80</option>
                                                                                                            <option value="81" >81</option>
                                                                                                            <option value="82" >82</option>
                                                                                                            <option value="83" >83</option>
                                                                                                            <option value="84" >84</option>
                                                                                                            <option value="85" >85</option>
                                                                                                            <option value="86" >86</option>
                                                                                                            <option value="87" >87</option>
                                                                                                            <option value="88" >88</option>
                                                                                                            <option value="89" >89</option>
                                                                                                            <option value="90" >90</option>
                                                                                                            <option value="91" >91</option>
                                                                                                            <option value="92" >92</option>
                                                                                                            <option value="93" >93</option>
                                                                                                            <option value="94" >94</option>
                                                                                                            <option value="95" >95</option>
                                                                                                            <option value="96" >96</option>
                                                                                                            <option value="97" >97</option>
                                                                                                            <option value="98" >98</option>
                                                                                                            <option value="99" >99</option>
                                                                                                            <option value="100" >100</option>
                                                                                                    </select>
                                            </div> 
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Gender
                                                                                                    </label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="gender_0" required  class="part" value="Male" >Male
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="gender_0" required  class="whole" value="Female" >Female
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="gender_0" required  class="whole" value="Other" >Other
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> 
                                 
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Address Line 1
                                                                                                    </label>
                                                <textarea type="text" class="form-control inner-textfield" required name="addressOne_0" ></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Address Line 2
                                                                                                    </label>
                                                <textarea type="text" class="form-control inner-textfield" required name="addressTwo_0" ></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Pin Code
                                                                                                    </label>
                                                <input type="text" class="form-control inner-textfield" onkeypress="return isNumberKey(event)" minlength="6" maxlength="6" required name="pinCode_0" value="" >
                                            </div>
                                             
                                           
                                         </div>    
                                         <div class="col-md-14">
                                            <label class="inner-label">
                                                Do you want to add more accused ?
                                                                                            </label>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="optradio" required="" id="add_more_yes" class="part" value="Yes">Yes
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="optradio" required id="add_more_no" class="whole" value="No">No
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            </div>
                                           
                                            </form>   
                                             </div>
                                             <div>
                                            <a href="https://wlor.wildcrimeassist.in/wlors/section4" class="listinBtn">Previous</a>
                                            <!--<a href="" class="listinBtn" data-toggle="modal" data-target="#AddMoreSpeciesAlert">Next1</a>-->
                                            <input type="submit" class="listinBtn" value="Next" name="submit" title="Next">   
                                                                        </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<div class="control-sidebar-bg"></div>
</div>




<?php
include BASEPATH.'/pages/layout/footer.php';
?>