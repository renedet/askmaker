<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_01b8c2f581cd3a67a43993574baa07d93f59bbb54154e176521c852b9d00f1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08b4db95a2554caa8af30a4f9f319a39183a44578dcda4fad224eb0a2d953c5b = $this->env->getExtension("native_profiler");
        $__internal_08b4db95a2554caa8af30a4f9f319a39183a44578dcda4fad224eb0a2d953c5b->enter($__internal_08b4db95a2554caa8af30a4f9f319a39183a44578dcda4fad224eb0a2d953c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b4db95a2554caa8af30a4f9f319a39183a44578dcda4fad224eb0a2d953c5b->leave($__internal_08b4db95a2554caa8af30a4f9f319a39183a44578dcda4fad224eb0a2d953c5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66d479093c1eae6030bc53008c1053c8d88da2890aca936c8b95a4625792479a = $this->env->getExtension("native_profiler");
        $__internal_66d479093c1eae6030bc53008c1053c8d88da2890aca936c8b95a4625792479a->enter($__internal_66d479093c1eae6030bc53008c1053c8d88da2890aca936c8b95a4625792479a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_66d479093c1eae6030bc53008c1053c8d88da2890aca936c8b95a4625792479a->leave($__internal_66d479093c1eae6030bc53008c1053c8d88da2890aca936c8b95a4625792479a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7112c940b7bac5caa6b03e3a7faadb5e8fe2f934a82914efaaee1ad673f810aa = $this->env->getExtension("native_profiler");
        $__internal_7112c940b7bac5caa6b03e3a7faadb5e8fe2f934a82914efaaee1ad673f810aa->enter($__internal_7112c940b7bac5caa6b03e3a7faadb5e8fe2f934a82914efaaee1ad673f810aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7112c940b7bac5caa6b03e3a7faadb5e8fe2f934a82914efaaee1ad673f810aa->leave($__internal_7112c940b7bac5caa6b03e3a7faadb5e8fe2f934a82914efaaee1ad673f810aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9793824ff59e64fe1eb6992b0be46a2fb58d90f0215fe1e7ed06e70b9bfd1360 = $this->env->getExtension("native_profiler");
        $__internal_9793824ff59e64fe1eb6992b0be46a2fb58d90f0215fe1e7ed06e70b9bfd1360->enter($__internal_9793824ff59e64fe1eb6992b0be46a2fb58d90f0215fe1e7ed06e70b9bfd1360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9793824ff59e64fe1eb6992b0be46a2fb58d90f0215fe1e7ed06e70b9bfd1360->leave($__internal_9793824ff59e64fe1eb6992b0be46a2fb58d90f0215fe1e7ed06e70b9bfd1360_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
