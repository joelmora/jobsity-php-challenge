<?php

/* AppBundle:entry:entries_by_user.html.twig */
class __TwigTemplate_21c85f86b61dcbfeef00e2aafe3e963ed4ab51684d331b3189b5d78d8df1ef27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:entry:entries_by_user.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35f25c595cdeb27c8e4b8fc80d26c4e399abb96c68f8bef1bab6c052deee2101 = $this->env->getExtension("native_profiler");
        $__internal_35f25c595cdeb27c8e4b8fc80d26c4e399abb96c68f8bef1bab6c052deee2101->enter($__internal_35f25c595cdeb27c8e4b8fc80d26c4e399abb96c68f8bef1bab6c052deee2101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:entry:entries_by_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f25c595cdeb27c8e4b8fc80d26c4e399abb96c68f8bef1bab6c052deee2101->leave($__internal_35f25c595cdeb27c8e4b8fc80d26c4e399abb96c68f8bef1bab6c052deee2101_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad0eeb90d4a00d317e6c003c43b3f6bd4d98f5a962fdcd67d8656cfafd058c19 = $this->env->getExtension("native_profiler");
        $__internal_ad0eeb90d4a00d317e6c003c43b3f6bd4d98f5a962fdcd67d8656cfafd058c19->enter($__internal_ad0eeb90d4a00d317e6c003c43b3f6bd4d98f5a962fdcd67d8656cfafd058c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Entries By User
";
        
        $__internal_ad0eeb90d4a00d317e6c003c43b3f6bd4d98f5a962fdcd67d8656cfafd058c19->leave($__internal_ad0eeb90d4a00d317e6c003c43b3f6bd4d98f5a962fdcd67d8656cfafd058c19_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_461d6f61e7e0581eb9d6760bc83e12b72457d20eec8ac73505fedc874ccda2de = $this->env->getExtension("native_profiler");
        $__internal_461d6f61e7e0581eb9d6760bc83e12b72457d20eec8ac73505fedc874ccda2de->enter($__internal_461d6f61e7e0581eb9d6760bc83e12b72457d20eec8ac73505fedc874ccda2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo " Entries</h3>

    <div class=\"row\">
        <div class=\"col-lg-9\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Creation Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 24
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "user", array()), "html", null, true);
            echo "</a>
                        </td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["entry"], "content", array()), 0, 60) . "..."), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            if ($this->getAttribute($context["entry"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "creationDate", array()), "m/d/Y h:i A"), "html", null, true);
            }
            echo "</td>
                        <td>
                            <a class=\"btn btn-default btn-xs\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entry_show", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                            ";
            // line 33
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 34
                echo "                                <a class=\"btn btn-info btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entry_edit", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">Edit</a>
                            ";
            }
            // line 36
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
            </table>

            <a class=\"action-button btn btn-default btn-sm\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("entry_index");
        echo "\">Back to the list</a>

        </div>
        <div class=\"col-lg-3\">

            <div id=\"twitter-panel\" class=\"panel\">
                <div class=\"panel-heading\"><strong>Twitter Feed</strong>
                    <img class=\"logo-twitter\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/TwitterLogo.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"panel-body\">

                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")));
        foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
            // line 54
            echo "                        ";
            $context["hidden"] = twig_in_filter($this->getAttribute($context["tweet"], "id_str", array()), (isset($context["hiddenTweets"]) ? $context["hiddenTweets"] : $this->getContext($context, "hiddenTweets")));
            // line 55
            echo "
                        ";
            // line 56
            if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))) &&  !(isset($context["hidden"]) ? $context["hidden"] : $this->getContext($context, "hidden"))) || ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))))) {
                // line 57
                echo "                            <div class=\"tweet\">
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <img class=\"media-object profile-picture\" src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tweet"], "user", array()), "profile_image_url", array()), "html", null, true);
                echo "\" alt=\"Profile\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span class=\"media-heading username\">";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tweet"], "user", array()), "name", array()), "html", null, true);
                echo "</span>
                                        <span class=\"timestamp\">";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tweet"], "created_at", array()), "d M Y"), "html", null, true);
                echo "</span>
                                        <div class=\"screen-name\">@";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tweet"], "user", array()), "screen_name", array()), "html", null, true);
                echo "</div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"text\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["tweet"], "text", array()), "html", null, true);
                echo "</div>
                                    </div>
                                </div>

                                ";
                // line 74
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))))) {
                    // line 75
                    echo "
                                    <button class=\"unhide-tweet btn btn-default btn-xs ";
                    // line 76
                    echo twig_escape_filter($this->env, (((isset($context["hidden"]) ? $context["hidden"] : $this->getContext($context, "hidden"))) ? ((isset($context["hidden"]) ? $context["hidden"] : $this->getContext($context, "hidden"))) : ("hidden")), "html", null, true);
                    echo "\" title=\"Unhide Tweet\"
                                            data-user-id=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo "\" data-tweet-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tweet"], "id_str", array()), "html", null, true);
                    echo "\">
                                        <span class=\"glyphicon glyphicon-eye-open\"></span>
                                    </button>

                                    <button class=\"hide-tweet btn btn-default btn-xs ";
                    // line 81
                    echo (((isset($context["hidden"]) ? $context["hidden"] : $this->getContext($context, "hidden"))) ? ("hidden") : (""));
                    echo "\" title=\"Hide Tweet\"
                                            data-user-id=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo "\" data-tweet-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tweet"], "id_str", array()), "html", null, true);
                    echo "\">
                                        <span class=\"glyphicon glyphicon-eye-close\"></span>
                                    </button>

                                    ";
                    // line 86
                    if ((isset($context["hidden"]) ? $context["hidden"] : $this->getContext($context, "hidden"))) {
                        // line 87
                        echo "                                        <div class=\"tweet-opacity\"></div>
                                    ";
                    }
                    // line 89
                    echo "
                                ";
                }
                // line 91
                echo "
                            </div>
                        ";
            }
            // line 94
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                    ";
        // line 97
        if (twig_test_empty((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")))) {
            // line 98
            echo "                        <span id=\"no-tweets\">Twitter feed couldn't be loaded, check twitter username and try again</span>
                    ";
        }
        // line 100
        echo "
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_461d6f61e7e0581eb9d6760bc83e12b72457d20eec8ac73505fedc874ccda2de->leave($__internal_461d6f61e7e0581eb9d6760bc83e12b72457d20eec8ac73505fedc874ccda2de_prof);

    }

    // line 109
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b1fa450a577c85407565814d63e1fd59cc9f51bb5fc30d04ee802bf8105c24b3 = $this->env->getExtension("native_profiler");
        $__internal_b1fa450a577c85407565814d63e1fd59cc9f51bb5fc30d04ee802bf8105c24b3->enter($__internal_b1fa450a577c85407565814d63e1fd59cc9f51bb5fc30d04ee802bf8105c24b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 110
        echo "    <script>
        \$(function()
        {
            function hideTweet(tweetContainer)
            {
                tweetContainer.append('<div class=\"tweet-opacity\"></div>');

                tweetContainer.find('.unhide-tweet').removeClass('hidden');
                tweetContainer.find('.hide-tweet').addClass('hidden');
            }

            function unhideTweet(tweetContainer)
            {
                tweetContainer.find('.tweet-opacity').remove();

                tweetContainer.find('.unhide-tweet').addClass('hidden');
                tweetContainer.find('.hide-tweet').removeClass('hidden');
            }

            //send request to hide tweet
            \$('.hide-tweet').click(function()
            {
                var button = \$(this);
                var tweetContainer = button.parents('.tweet');

                \$.ajax({
                    url: '/hiddenTweet/hide',
                    method: 'POST',
                    beforeSend: function() {
                        tweetContainer.waitMe({effect : 'bounce', bg: 'rgba(255,255,255,0.9)', color : '#55acee'});
                    },
                    data: {
                        userId: button.attr('data-user-id'),
                        tweetId: button.attr('data-tweet-id')
                    },
                    success: function(response) {
                        tweetContainer.waitMe('hide');

                        if (response.status) {
                            hideTweet(tweetContainer);
                        } else {
                            bootbox.alert(response.message);
                        }
                    },
                    error: function()
                    {
                        tweetContainer.waitMe('hide');
                        bootbox.alert('An Error Occurred! try again');
                    }
                });
            });

            //send request to unhide tweet
            \$('.unhide-tweet').click(function()
            {
                var button = \$(this);
                var tweetContainer = button.parents('.tweet');

                \$.ajax({
                    url: '/hiddenTweet/unhide',
                    method: 'POST',
                    beforeSend: function() {
                        tweetContainer.waitMe({effect : 'bounce', bg: 'rgba(255,255,255,0.9)', color : '#55acee'});
                    },
                    data: {
                        userId: button.attr('data-user-id'),
                        tweetId: button.attr('data-tweet-id')
                    },
                    success: function(response) {
                        tweetContainer.waitMe('hide');

                        if (response.status) {
                            unhideTweet(tweetContainer);
                        } else {
                            bootbox.alert(response.message);
                        }
                    },
                    error: function()
                    {
                        tweetContainer.waitMe('hide');
                        bootbox.alert('An Error Occurred! try again');
                    }
                });
            });


        });
    </script>
";
        
        $__internal_b1fa450a577c85407565814d63e1fd59cc9f51bb5fc30d04ee802bf8105c24b3->leave($__internal_b1fa450a577c85407565814d63e1fd59cc9f51bb5fc30d04ee802bf8105c24b3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:entry:entries_by_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 110,  269 => 109,  255 => 100,  251 => 98,  249 => 97,  246 => 96,  239 => 94,  234 => 91,  230 => 89,  226 => 87,  224 => 86,  215 => 82,  211 => 81,  202 => 77,  198 => 76,  195 => 75,  193 => 74,  186 => 70,  178 => 65,  174 => 64,  170 => 63,  164 => 60,  159 => 57,  157 => 56,  154 => 55,  151 => 54,  147 => 53,  140 => 49,  130 => 42,  125 => 39,  117 => 36,  111 => 34,  109 => 33,  105 => 32,  98 => 30,  94 => 29,  90 => 28,  83 => 26,  79 => 24,  75 => 23,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Entries By User*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h3>{{ username }} Entries</h3>*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-9">*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Author</th>*/
/*                     <th>Title</th>*/
/*                     <th>Content</th>*/
/*                     <th>Creation Date</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for entry in entries %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="{{ path('user_show', { 'id': entry.user.id }) }}">{{ entry.user }}</a>*/
/*                         </td>*/
/*                         <td>{{ entry.title }}</td>*/
/*                         <td>{{ entry.content | slice(0,60) ~ '...'  }}</td>*/
/*                         <td>{% if entry.creationDate %}{{ entry.creationDate|date('m/d/Y h:i A') }}{% endif %}</td>*/
/*                         <td>*/
/*                             <a class="btn btn-default btn-xs" href="{{ path('entry_show', { 'id': entry.id }) }}">Show</a>*/
/*                             {% if app.user %}*/
/*                                 <a class="btn btn-info btn-xs" href="{{ path('entry_edit', { 'id': entry.id }) }}">Edit</a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*             <a class="action-button btn btn-default btn-sm" href="{{ path('entry_index') }}">Back to the list</a>*/
/* */
/*         </div>*/
/*         <div class="col-lg-3">*/
/* */
/*             <div id="twitter-panel" class="panel">*/
/*                 <div class="panel-heading"><strong>Twitter Feed</strong>*/
/*                     <img class="logo-twitter" src="{{ asset('images/TwitterLogo.png') }}">*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/* */
/*                     {% for tweet in timeline %}*/
/*                         {% set hidden = tweet.id_str in hiddenTweets %}*/
/* */
/*                         {% if (app.user != username and not hidden) or (app.user == username) %}*/
/*                             <div class="tweet">*/
/*                                 <div class="media">*/
/*                                     <div class="media-left">*/
/*                                         <img class="media-object profile-picture" src="{{ tweet.user.profile_image_url }}" alt="Profile">*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/*                                         <span class="media-heading username">{{ tweet.user.name }}</span>*/
/*                                         <span class="timestamp">{{ tweet.created_at | date('d M Y') }}</span>*/
/*                                         <div class="screen-name">@{{ tweet.user.screen_name }}</div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row">*/
/*                                     <div class="col-xs-12">*/
/*                                         <div class="text">{{ tweet.text }}</div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 {% if app.user and app.user == username %}*/
/* */
/*                                     <button class="unhide-tweet btn btn-default btn-xs {{ hidden ? : 'hidden' }}" title="Unhide Tweet"*/
/*                                             data-user-id="{{ app.user.id }}" data-tweet-id="{{ tweet.id_str }}">*/
/*                                         <span class="glyphicon glyphicon-eye-open"></span>*/
/*                                     </button>*/
/* */
/*                                     <button class="hide-tweet btn btn-default btn-xs {{ hidden ? 'hidden' }}" title="Hide Tweet"*/
/*                                             data-user-id="{{ app.user.id }}" data-tweet-id="{{ tweet.id_str }}">*/
/*                                         <span class="glyphicon glyphicon-eye-close"></span>*/
/*                                     </button>*/
/* */
/*                                     {% if hidden %}*/
/*                                         <div class="tweet-opacity"></div>*/
/*                                     {% endif %}*/
/* */
/*                                 {% endif %}*/
/* */
/*                             </div>*/
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if timeline is empty %}*/
/*                         <span id="no-tweets">Twitter feed couldn't be loaded, check twitter username and try again</span>*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script>*/
/*         $(function()*/
/*         {*/
/*             function hideTweet(tweetContainer)*/
/*             {*/
/*                 tweetContainer.append('<div class="tweet-opacity"></div>');*/
/* */
/*                 tweetContainer.find('.unhide-tweet').removeClass('hidden');*/
/*                 tweetContainer.find('.hide-tweet').addClass('hidden');*/
/*             }*/
/* */
/*             function unhideTweet(tweetContainer)*/
/*             {*/
/*                 tweetContainer.find('.tweet-opacity').remove();*/
/* */
/*                 tweetContainer.find('.unhide-tweet').addClass('hidden');*/
/*                 tweetContainer.find('.hide-tweet').removeClass('hidden');*/
/*             }*/
/* */
/*             //send request to hide tweet*/
/*             $('.hide-tweet').click(function()*/
/*             {*/
/*                 var button = $(this);*/
/*                 var tweetContainer = button.parents('.tweet');*/
/* */
/*                 $.ajax({*/
/*                     url: '/hiddenTweet/hide',*/
/*                     method: 'POST',*/
/*                     beforeSend: function() {*/
/*                         tweetContainer.waitMe({effect : 'bounce', bg: 'rgba(255,255,255,0.9)', color : '#55acee'});*/
/*                     },*/
/*                     data: {*/
/*                         userId: button.attr('data-user-id'),*/
/*                         tweetId: button.attr('data-tweet-id')*/
/*                     },*/
/*                     success: function(response) {*/
/*                         tweetContainer.waitMe('hide');*/
/* */
/*                         if (response.status) {*/
/*                             hideTweet(tweetContainer);*/
/*                         } else {*/
/*                             bootbox.alert(response.message);*/
/*                         }*/
/*                     },*/
/*                     error: function()*/
/*                     {*/
/*                         tweetContainer.waitMe('hide');*/
/*                         bootbox.alert('An Error Occurred! try again');*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             //send request to unhide tweet*/
/*             $('.unhide-tweet').click(function()*/
/*             {*/
/*                 var button = $(this);*/
/*                 var tweetContainer = button.parents('.tweet');*/
/* */
/*                 $.ajax({*/
/*                     url: '/hiddenTweet/unhide',*/
/*                     method: 'POST',*/
/*                     beforeSend: function() {*/
/*                         tweetContainer.waitMe({effect : 'bounce', bg: 'rgba(255,255,255,0.9)', color : '#55acee'});*/
/*                     },*/
/*                     data: {*/
/*                         userId: button.attr('data-user-id'),*/
/*                         tweetId: button.attr('data-tweet-id')*/
/*                     },*/
/*                     success: function(response) {*/
/*                         tweetContainer.waitMe('hide');*/
/* */
/*                         if (response.status) {*/
/*                             unhideTweet(tweetContainer);*/
/*                         } else {*/
/*                             bootbox.alert(response.message);*/
/*                         }*/
/*                     },*/
/*                     error: function()*/
/*                     {*/
/*                         tweetContainer.waitMe('hide');*/
/*                         bootbox.alert('An Error Occurred! try again');*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
