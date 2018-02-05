<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_eef975765f3a139a40851d89a5ef468fca879489a4b846dd9d7f00e7df045a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a1126756ba2b07918e13ed83161b34c948c1490de2cb7d00e27f4e4bf0a1b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1126756ba2b07918e13ed83161b34c948c1490de2cb7d00e27f4e4bf0a1b26->enter($__internal_9a1126756ba2b07918e13ed83161b34c948c1490de2cb7d00e27f4e4bf0a1b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_acd5076b229cc65fc01333cbc2cc185295d14a54c91ffa78ad1fefd4fe5db656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd5076b229cc65fc01333cbc2cc185295d14a54c91ffa78ad1fefd4fe5db656->enter($__internal_acd5076b229cc65fc01333cbc2cc185295d14a54c91ffa78ad1fefd4fe5db656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9a1126756ba2b07918e13ed83161b34c948c1490de2cb7d00e27f4e4bf0a1b26->leave($__internal_9a1126756ba2b07918e13ed83161b34c948c1490de2cb7d00e27f4e4bf0a1b26_prof);

        
        $__internal_acd5076b229cc65fc01333cbc2cc185295d14a54c91ffa78ad1fefd4fe5db656->leave($__internal_acd5076b229cc65fc01333cbc2cc185295d14a54c91ffa78ad1fefd4fe5db656_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
