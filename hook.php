<?php if (shell_exec('git pull')) {
    echo "excecuted shell exec";
} else {
    echo "bullshti";
}