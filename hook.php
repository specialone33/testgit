<?php if ($output = shell_exec('git pull')) {
    echo "excecuted shell exec $output";
} else {
    echo "bullshti $output";
}