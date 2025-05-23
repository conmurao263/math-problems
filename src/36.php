<?php
function solveMathProblem($solution) {
    $parts = explode(';', $solution);
    
    foreach ($parts as $part) {
        if (strpos($part, " ") !== false && strpos($part, "\n") === false) {
            // Split the solution into parts based on spaces and new lines
            $solutionParts = explode("\n", trim(preg_replace('/\s+/', '', $part)));
            
            foreach ($solutionParts as $partNumber => $part) {
                if (strpos($part, " ") !== false && strpos($part, "\n") === false) {
                    // Split the current solution part into parts based on spaces and new lines
                    $currentPart = explode("\n", trim(preg_replace('/\s+/', '', $part)));
                    
                    // Find the first occurrence of a number in the current solution part
                    if (strpos($currentPart[0], " ") !== false) {
                        return $solution;
                    } else {
                        continue;
                    }
                } elseif ($part === "Solution to math problems for my school's math class.") {
                    return "Math is fun!";
                }
            }
        }
    }
    
    return "No solution found.";
}
