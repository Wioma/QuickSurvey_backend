<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4931c82106835d7be72bd669d8dcd9f7e9f12d09d625c1d5f28785c0488a089d extends Twig_Template
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
        $__internal_c1d50509ad99b5b4cc5e6ca40f0b69d7bb3f0e1f784c4fe29a37a8f9d8386492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d50509ad99b5b4cc5e6ca40f0b69d7bb3f0e1f784c4fe29a37a8f9d8386492->enter($__internal_c1d50509ad99b5b4cc5e6ca40f0b69d7bb3f0e1f784c4fe29a37a8f9d8386492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_319aacbe019b6bc33d95a5efebabae67d3e805e636e52a32aa037d1e9c7a6673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319aacbe019b6bc33d95a5efebabae67d3e805e636e52a32aa037d1e9c7a6673->enter($__internal_319aacbe019b6bc33d95a5efebabae67d3e805e636e52a32aa037d1e9c7a6673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c1d50509ad99b5b4cc5e6ca40f0b69d7bb3f0e1f784c4fe29a37a8f9d8386492->leave($__internal_c1d50509ad99b5b4cc5e6ca40f0b69d7bb3f0e1f784c4fe29a37a8f9d8386492_prof);

        
        $__internal_319aacbe019b6bc33d95a5efebabae67d3e805e636e52a32aa037d1e9c7a6673->leave($__internal_319aacbe019b6bc33d95a5efebabae67d3e805e636e52a32aa037d1e9c7a6673_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
