<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2db79686449657a48a1c171822303dae6df6c781b0030eb0ceb1d462819839b5 extends Twig_Template
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
        $__internal_1af433f1dea646150b424da04f8ced29f3bd76b13288423878cc3c1b8a978f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af433f1dea646150b424da04f8ced29f3bd76b13288423878cc3c1b8a978f22->enter($__internal_1af433f1dea646150b424da04f8ced29f3bd76b13288423878cc3c1b8a978f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6b6d33eae1a0cf0def96457774005561fc3696e53dcc9d08c0112b1273241a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6d33eae1a0cf0def96457774005561fc3696e53dcc9d08c0112b1273241a9d->enter($__internal_6b6d33eae1a0cf0def96457774005561fc3696e53dcc9d08c0112b1273241a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1af433f1dea646150b424da04f8ced29f3bd76b13288423878cc3c1b8a978f22->leave($__internal_1af433f1dea646150b424da04f8ced29f3bd76b13288423878cc3c1b8a978f22_prof);

        
        $__internal_6b6d33eae1a0cf0def96457774005561fc3696e53dcc9d08c0112b1273241a9d->leave($__internal_6b6d33eae1a0cf0def96457774005561fc3696e53dcc9d08c0112b1273241a9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
