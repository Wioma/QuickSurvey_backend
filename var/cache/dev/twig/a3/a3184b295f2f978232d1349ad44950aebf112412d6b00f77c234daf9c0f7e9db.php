<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a252de1628248b6983a206065f565bb88f264cc184db1925572c9c643fdb631d extends Twig_Template
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
        $__internal_d26c83823233b345a058fd1b0b8e88ce8d9b0f0f03d9c86bd34ecb8cf77bde97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26c83823233b345a058fd1b0b8e88ce8d9b0f0f03d9c86bd34ecb8cf77bde97->enter($__internal_d26c83823233b345a058fd1b0b8e88ce8d9b0f0f03d9c86bd34ecb8cf77bde97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_de35567cc66349993fc3ee328f9c388d8b93b7e225a8ef720248a242dcce83cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de35567cc66349993fc3ee328f9c388d8b93b7e225a8ef720248a242dcce83cb->enter($__internal_de35567cc66349993fc3ee328f9c388d8b93b7e225a8ef720248a242dcce83cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d26c83823233b345a058fd1b0b8e88ce8d9b0f0f03d9c86bd34ecb8cf77bde97->leave($__internal_d26c83823233b345a058fd1b0b8e88ce8d9b0f0f03d9c86bd34ecb8cf77bde97_prof);

        
        $__internal_de35567cc66349993fc3ee328f9c388d8b93b7e225a8ef720248a242dcce83cb->leave($__internal_de35567cc66349993fc3ee328f9c388d8b93b7e225a8ef720248a242dcce83cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
