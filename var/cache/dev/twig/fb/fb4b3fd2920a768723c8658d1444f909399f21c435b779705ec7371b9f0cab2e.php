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
        $__internal_5bb7f00d1bb0c81046c0f9a54bc4e5942329d8cfd07bd5ed55d86b4789e2c70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb7f00d1bb0c81046c0f9a54bc4e5942329d8cfd07bd5ed55d86b4789e2c70b->enter($__internal_5bb7f00d1bb0c81046c0f9a54bc4e5942329d8cfd07bd5ed55d86b4789e2c70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1815918d4117ae271b72bc8dd28b90e06c0ac05689900e62811f5c9a9600548f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1815918d4117ae271b72bc8dd28b90e06c0ac05689900e62811f5c9a9600548f->enter($__internal_1815918d4117ae271b72bc8dd28b90e06c0ac05689900e62811f5c9a9600548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5bb7f00d1bb0c81046c0f9a54bc4e5942329d8cfd07bd5ed55d86b4789e2c70b->leave($__internal_5bb7f00d1bb0c81046c0f9a54bc4e5942329d8cfd07bd5ed55d86b4789e2c70b_prof);

        
        $__internal_1815918d4117ae271b72bc8dd28b90e06c0ac05689900e62811f5c9a9600548f->leave($__internal_1815918d4117ae271b72bc8dd28b90e06c0ac05689900e62811f5c9a9600548f_prof);

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
