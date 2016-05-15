<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_081ff70a7f4adeead5a734c814e5eddbc76615c71fe766feb5a5498fae56e8c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d1663da9d62fb9a0ba059ad3b30065077373011962c29bef127fffa0043974e = $this->env->getExtension("native_profiler");
        $__internal_7d1663da9d62fb9a0ba059ad3b30065077373011962c29bef127fffa0043974e->enter($__internal_7d1663da9d62fb9a0ba059ad3b30065077373011962c29bef127fffa0043974e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1663da9d62fb9a0ba059ad3b30065077373011962c29bef127fffa0043974e->leave($__internal_7d1663da9d62fb9a0ba059ad3b30065077373011962c29bef127fffa0043974e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df42c03dedba02c9da3f63dd6cf1066138f81993378a5d03ec140c18243b26aa = $this->env->getExtension("native_profiler");
        $__internal_df42c03dedba02c9da3f63dd6cf1066138f81993378a5d03ec140c18243b26aa->enter($__internal_df42c03dedba02c9da3f63dd6cf1066138f81993378a5d03ec140c18243b26aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df42c03dedba02c9da3f63dd6cf1066138f81993378a5d03ec140c18243b26aa->leave($__internal_df42c03dedba02c9da3f63dd6cf1066138f81993378a5d03ec140c18243b26aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2d6585bfd911e3abb26d6981dc5e2aba303a42868d566b278da9b09b55e2ad9 = $this->env->getExtension("native_profiler");
        $__internal_e2d6585bfd911e3abb26d6981dc5e2aba303a42868d566b278da9b09b55e2ad9->enter($__internal_e2d6585bfd911e3abb26d6981dc5e2aba303a42868d566b278da9b09b55e2ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2d6585bfd911e3abb26d6981dc5e2aba303a42868d566b278da9b09b55e2ad9->leave($__internal_e2d6585bfd911e3abb26d6981dc5e2aba303a42868d566b278da9b09b55e2ad9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_578b68b9ee224f5bc312aa76bbe4bca51f1137203973475812d5f405f50da8bb = $this->env->getExtension("native_profiler");
        $__internal_578b68b9ee224f5bc312aa76bbe4bca51f1137203973475812d5f405f50da8bb->enter($__internal_578b68b9ee224f5bc312aa76bbe4bca51f1137203973475812d5f405f50da8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_578b68b9ee224f5bc312aa76bbe4bca51f1137203973475812d5f405f50da8bb->leave($__internal_578b68b9ee224f5bc312aa76bbe4bca51f1137203973475812d5f405f50da8bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
