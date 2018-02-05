<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_efa47a9aedbd262bc45d6279a0f200ab7a2091ba5670dee4a3d917936763fb1e extends Twig_Template
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
        $__internal_d3ae71268ed8ceb4a2352554218b228f2ef9dd04ed00ffa684f93a0d85243c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ae71268ed8ceb4a2352554218b228f2ef9dd04ed00ffa684f93a0d85243c5d->enter($__internal_d3ae71268ed8ceb4a2352554218b228f2ef9dd04ed00ffa684f93a0d85243c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_db39cff1d28e41a7a594be525fe6e202794cd3a7eff23a1c1d635a80421f1a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db39cff1d28e41a7a594be525fe6e202794cd3a7eff23a1c1d635a80421f1a9b->enter($__internal_db39cff1d28e41a7a594be525fe6e202794cd3a7eff23a1c1d635a80421f1a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d3ae71268ed8ceb4a2352554218b228f2ef9dd04ed00ffa684f93a0d85243c5d->leave($__internal_d3ae71268ed8ceb4a2352554218b228f2ef9dd04ed00ffa684f93a0d85243c5d_prof);

        
        $__internal_db39cff1d28e41a7a594be525fe6e202794cd3a7eff23a1c1d635a80421f1a9b->leave($__internal_db39cff1d28e41a7a594be525fe6e202794cd3a7eff23a1c1d635a80421f1a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
