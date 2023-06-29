<?php

function from(DateTimeImmutable $date): DateTimeImmutable
{
     $date2 = clone $date;
    return $date2->add(new DateInterval('PT'.(10**9).'S'));
}
?>