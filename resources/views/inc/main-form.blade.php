<div id="mainForm" class="row">
    <div id="ou_container" class="col-md-4 elementForm">
        <span>
           <img src="images/icones/Ou-web.png" width="20px" height="20px" class="icon">
           <input id="ou" type="text" name="ou" placeholder="Où" class="">
        </span>
    </div>
    <div id="dates_container" class="col-md-3 elementForm">
        <span>
            <img src="images/icones/Dates-web.png" width="20px" height="20px" class="icon">
            <input type="text" name="daterange" placeholder="Arrivée - Départ">
        </span>
    </div>
    <div class="col-md-3 elementForm">
        <span>
            <img src="images/icones/Personnes-web.png" width="20px" height="20px" class="icon">
            <input type="text" name="persons" placeholder="1Personnes" class="mybtn dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-expanded="true" readonly="true">
                            <div id="dropdown-menu-person"  class="row dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                     
                                  <div class="col-lg-4 col-md-4 col-sm-3">
                                    Personne(s)
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-sm-9">
                                   <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-0"></div> 
                                    <div class="col-lg-3 col-md-3 col-sm-3" >
                                        <div class="mybtn-inlist" id="minus">-</div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6" > 
                                        <div id="nb_personnes_dm" class="mybtn-inlist mynum">1</div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div  class="mybtn-inlist" id="plus" >+</div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-0"></div>
                                    </div>   
                                   </div>                       
                                
                              </div>
        </span>
    </div>
    <div class="col-md-2 elementForm">
        <span>
            <a href="budget_detailed" id="search" class="btn btn-danger">Recherche</a>
        </span>
    </div>
    
</div>


<script type="text/javascript">
    $(function() {
    $('input[name="daterange"]').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YY'
        }
    });
});



// Autocomplete first Form

var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var states = ['Alabama','Alabama','Alabama','Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

$('#ou').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});


</script>