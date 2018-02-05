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
        $__internal_ad35c1680bc7ec3e1d3f6687cff46911ff575bcfa9f129d8f94810f7ea1f2bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad35c1680bc7ec3e1d3f6687cff46911ff575bcfa9f129d8f94810f7ea1f2bf6->enter($__internal_ad35c1680bc7ec3e1d3f6687cff46911ff575bcfa9f129d8f94810f7ea1f2bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_20a8263f9fd6248632448ec8b701f8daccc76fccb73e5fda86ee64db024a9a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a8263f9fd6248632448ec8b701f8daccc76fccb73e5fda86ee64db024a9a58->enter($__internal_20a8263f9fd6248632448ec8b701f8daccc76fccb73e5fda86ee64db024a9a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ad35c1680bc7ec3e1d3f6687cff46911ff575bcfa9f129d8f94810f7ea1f2bf6->leave($__internal_ad35c1680bc7ec3e1d3f6687cff46911ff575bcfa9f129d8f94810f7ea1f2bf6_prof);

        
        $__internal_20a8263f9fd6248632448ec8b701f8daccc76fccb73e5fda86ee64db024a9a58->leave($__internal_20a8263f9fd6248632448ec8b701f8daccc76fccb73e5fda86ee64db024a9a58_prof);

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
