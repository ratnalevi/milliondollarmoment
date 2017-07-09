@extends('layout')

@section('content')

<div class="container header-padding">
<h1 style="text-align: center;">Frequently asked questions</h1>
    <div class="panel-group" id="faqAccordion">
        
        <div class="panel panel-default">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
              <h4 class="panel-title">
                  <a href="#" class="ing">Q: Why do we need an event planner ?</a>
              </h4>
            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <p>Because, on the day of event, you would not want to wobble due to untimely presentation or undecided|incomplete work, so that the event happens to be performed very uncomely. You can just sit back and relax, watching us play the game and bring that magical smile on the surprisee's face.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
              <h4 class="panel-title">
                  <a href="#" class="ing">Q: Why do we need to surprise ?</a>
              </h4>
            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <p>An unexpected surprise definitely steals their heart and leaves them speechless for your love and concern. It lets them know you care a lot above all.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
              <h4 class="panel-title">
                  <a href="#" class="ing">Q: Can I afford ?</a>
              </h4>
            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <p>Yes, we have a range of packages to choose from for all occasions.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
              <h4 class="panel-title">
                  <a href="#" class="ing">Q: How far in advance should I book our service ?</a>
              </h4>
            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <p>Reaching us 3 weeks in advance gives us time to put all things together for the day. However we will confirm the event only after receiving the full amount. Last minute confirmations would put everything in chaos.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
              <h4 class="panel-title">
                  <a href="#" class="ing">Q: How does the surprise planner work ?</a>
              </h4>
            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <p>You can give us a call to surprise your loved ones and we promise to leave them in awe.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
              <h4 class="panel-title">
                  <a href="#" class="ing">Q: Your packages don’t cover exactly what we want can you offer something ?</a>
              </h4>
            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <p>We can also tailor the package to fit your taste, need and pocket.</p>
                </div>
            </div>
        </div>

    </div>
    <!--/panel-group-->
</div>
@endsection