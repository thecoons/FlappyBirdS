<?php

/* AppBundle:Neuroevol:index.html.twig */
class __TwigTemplate_a26266045e9250281b37b24e1525382f0dede3314f7ad157b7fba154f3b69ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Neuroevol:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_675b2d0329eb5b3c903f78fb9059a8ed8071343e22d5b3a58f9df932d62a831b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675b2d0329eb5b3c903f78fb9059a8ed8071343e22d5b3a58f9df932d62a831b->enter($__internal_675b2d0329eb5b3c903f78fb9059a8ed8071343e22d5b3a58f9df932d62a831b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Neuroevol:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675b2d0329eb5b3c903f78fb9059a8ed8071343e22d5b3a58f9df932d62a831b->leave($__internal_675b2d0329eb5b3c903f78fb9059a8ed8071343e22d5b3a58f9df932d62a831b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_613fd9238a692be9cc66dc6ec281c57cdf7b5f9fde3e1baa8bed229740710a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613fd9238a692be9cc66dc6ec281c57cdf7b5f9fde3e1baa8bed229740710a88->enter($__internal_613fd9238a692be9cc66dc6ec281c57cdf7b5f9fde3e1baa8bed229740710a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <!-- <div id=\"app\"> -->
  <nav class=\"light-blue lighten-1\" role=\"navigation\">
    <div class=\"nav-wrapper container\" ><a id=\"logo-container\" href=\"#\" class=\"brand-logo\" data-activates=\"slide-out\">Learning Game(s)</a>
    </div>
  </nav>

  <div class=\"section\">
    <div class=\"container\">
      ";
        // line 11
        if (($this->getAttribute(($context["user"] ?? null), "username", array(), "any", true, true) &&  !null)) {
            // line 12
            echo "      <div class=\"row\">
        <div class=\"col s6\"  id=\"app\">
          <h4>Indicateurs</h4>
          <p v-if=\"\">Progression du score</p>
          <div class=\"progress\">
            <div class=\"determinate\" v-bind:style=\"{width: perScore+'%'}\"></div>
          </div>
          <p v-if=\"\">Survivants</p>
          <div class=\"progress\">
            <div class=\"determinate\" v-bind:style=\"{width: perAlive+'%'}\"></div>
          </div>
          <h4>Parameters</h4>

          <label for=\"freq\">Frequence \${ game_param.freq }</label>
          <p class=\"range-field\">
            <input type=\"range\" id=\"freq\" min=\"1\" max=\"30\" v-model=\"game_param.freq\"/>
          </p>
          <label for=\"hpipe\">Pipe Height \${ game_param.pipeHoll }</label>
          <p class=\"range-field\">
            <input type=\"range\" id=\"hpipe\" min=\"100\" max=\"200\"  v-model=\"game_param.pipeHoll\"/>
          </p>
          <label for=\"hpipe\">Pipe Speed \${ game_param.pipeSpeed }</label>
          <p class=\"range-field\">
            <input type=\"range\" id=\"hpipe\" min=\"1\" max=\"6\"  v-model=\"game_param.pipeSpeed\"/>
          </p>
          <p>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse1\" onclick=\"speed(60)\" checked />
            <label for=\"vitesse1\">x1</label>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse2\" onclick=\"speed(120)\"/>
            <label for=\"vitesse2\">x2</label>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse3\" onclick=\"speed(180)\"/>
            <label for=\"vitesse3\">x3</label>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse4\" onclick=\"speed(300)\"/>
            <label for=\"vitesse4\">x5</label>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse5\" onclick=\"speed(0)\"/>
            <label for=\"vitesse5\">Max</label>
          </p>
          <chart-item></chart-item>
          <chart-param></chart-param>
          <div class=\"btn\"> Save Training </div>

        </div>
        <div class=\"col s6\">
          <h2>Flappy Bird(s)</h2>
          <div class=\"responsive-img\">
            <canvas id=\"flappy\" width=\"400\" height=\"412\"></canvas>
          </div>
          <p>De génération en génération la famille Bird lutte sans répit pour explorer son monde !!!!</p>

        </div>
      </div>
      <div class=\"row\">
        <div class=\"col s6\">
        </div>
        <div class=\"col s6\">

        </div>
        </div>
      </div>
    </div>

";
        } else {
            // line 74
            echo "<h1 class=\"header center deep-orange-text\">Learning Game(s)</h1>
<div class=\"row center\">
  <h5 class=\"header col s12 light\">Play for learning !!! </h5>
</div>
<br><br>
<div class=\"row center\">
  <a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"waves-effect waves-light yellow darken-2 btn\"><i class=\"material-icons right\">power_settings_new</i>Sign in</a>
  <a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"waves-effect waves-light deep-orange darken-2 btn\"><i class=\"material-icons right\">input</i>Sign up</a>
</div>
</div>
</div>
";
        }
        
        $__internal_613fd9238a692be9cc66dc6ec281c57cdf7b5f9fde3e1baa8bed229740710a88->leave($__internal_613fd9238a692be9cc66dc6ec281c57cdf7b5f9fde3e1baa8bed229740710a88_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Neuroevol:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 81,  124 => 80,  116 => 74,  52 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
  <!-- <div id=\"app\"> -->
  <nav class=\"light-blue lighten-1\" role=\"navigation\">
    <div class=\"nav-wrapper container\" ><a id=\"logo-container\" href=\"#\" class=\"brand-logo\" data-activates=\"slide-out\">Learning Game(s)</a>
    </div>
  </nav>

  <div class=\"section\">
    <div class=\"container\">
      {% if user.username is defined and not null %}
      <div class=\"row\">
        <div class=\"col s6\"  id=\"app\">
          <h4>Indicateurs</h4>
          <p v-if=\"\">Progression du score</p>
          <div class=\"progress\">
            <div class=\"determinate\" v-bind:style=\"{width: perScore+'%'}\"></div>
          </div>
          <p v-if=\"\">Survivants</p>
          <div class=\"progress\">
            <div class=\"determinate\" v-bind:style=\"{width: perAlive+'%'}\"></div>
          </div>
          <h4>Parameters</h4>

          <label for=\"freq\">Frequence \${ game_param.freq }</label>
          <p class=\"range-field\">
            <input type=\"range\" id=\"freq\" min=\"1\" max=\"30\" v-model=\"game_param.freq\"/>
          </p>
          <label for=\"hpipe\">Pipe Height \${ game_param.pipeHoll }</label>
          <p class=\"range-field\">
            <input type=\"range\" id=\"hpipe\" min=\"100\" max=\"200\"  v-model=\"game_param.pipeHoll\"/>
          </p>
          <label for=\"hpipe\">Pipe Speed \${ game_param.pipeSpeed }</label>
          <p class=\"range-field\">
            <input type=\"range\" id=\"hpipe\" min=\"1\" max=\"6\"  v-model=\"game_param.pipeSpeed\"/>
          </p>
          <p>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse1\" onclick=\"speed(60)\" checked />
            <label for=\"vitesse1\">x1</label>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse2\" onclick=\"speed(120)\"/>
            <label for=\"vitesse2\">x2</label>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse3\" onclick=\"speed(180)\"/>
            <label for=\"vitesse3\">x3</label>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse4\" onclick=\"speed(300)\"/>
            <label for=\"vitesse4\">x5</label>
            <input class=\"with-gap\" name=\"group3\" type=\"radio\" id=\"vitesse5\" onclick=\"speed(0)\"/>
            <label for=\"vitesse5\">Max</label>
          </p>
          <chart-item></chart-item>
          <chart-param></chart-param>
          <div class=\"btn\"> Save Training </div>

        </div>
        <div class=\"col s6\">
          <h2>Flappy Bird(s)</h2>
          <div class=\"responsive-img\">
            <canvas id=\"flappy\" width=\"400\" height=\"412\"></canvas>
          </div>
          <p>De génération en génération la famille Bird lutte sans répit pour explorer son monde !!!!</p>

        </div>
      </div>
      <div class=\"row\">
        <div class=\"col s6\">
        </div>
        <div class=\"col s6\">

        </div>
        </div>
      </div>
    </div>

{% else %}
<h1 class=\"header center deep-orange-text\">Learning Game(s)</h1>
<div class=\"row center\">
  <h5 class=\"header col s12 light\">Play for learning !!! </h5>
</div>
<br><br>
<div class=\"row center\">
  <a href=\"{{ path('fos_user_security_login')}}\" class=\"waves-effect waves-light yellow darken-2 btn\"><i class=\"material-icons right\">power_settings_new</i>Sign in</a>
  <a href=\"{{ path('fos_user_registration_register')}}\" class=\"waves-effect waves-light deep-orange darken-2 btn\"><i class=\"material-icons right\">input</i>Sign up</a>
</div>
</div>
</div>
{% endif %}
{% endblock %}
", "AppBundle:Neuroevol:index.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/src/AppBundle/Resources/views/Neuroevol/index.html.twig");
    }
}
