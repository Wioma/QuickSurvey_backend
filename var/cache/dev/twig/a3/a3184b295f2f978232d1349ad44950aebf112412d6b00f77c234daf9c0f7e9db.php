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
        $__internal_dfa6d16791eb5f27e991f5f850e6b418902d3ef409c4d3c7724fa29675202076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa6d16791eb5f27e991f5f850e6b418902d3ef409c4d3c7724fa29675202076->enter($__internal_dfa6d16791eb5f27e991f5f850e6b418902d3ef409c4d3c7724fa29675202076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7b56569c68ed3682e13d875610b2f87263459bdaf1521652bedc58011fdc0b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b56569c68ed3682e13d875610b2f87263459bdaf1521652bedc58011fdc0b2c->enter($__internal_7b56569c68ed3682e13d875610b2f87263459bdaf1521652bedc58011fdc0b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dfa6d16791eb5f27e991f5f850e6b418902d3ef409c4d3c7724fa29675202076->leave($__internal_dfa6d16791eb5f27e991f5f850e6b418902d3ef409c4d3c7724fa29675202076_prof);

        
        $__internal_7b56569c68ed3682e13d875610b2f87263459bdaf1521652bedc58011fdc0b2c->leave($__internal_7b56569c68ed3682e13d875610b2f87263459bdaf1521652bedc58011fdc0b2c_prof);

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
