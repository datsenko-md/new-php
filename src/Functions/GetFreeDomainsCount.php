<?php

/*Реализуйте функцию getFreeDomainsCount, которая принимает на вход список
емейлов, а возвращает количество емейлов, расположенных на каждом бесплатном
домене. Список бесплатных доменов хранится в константе FREE_EMAIL_DOMAINS.*/

function getFreeDomainsCount($emails)
{
    $domains = array_map(fn($email) => explode('@', $email)[1], $emails);

    $freeDomains = array_filter($domains, fn($domain) => in_array($domain, FREE_EMAIL_DOMAINS));
    $grouped = array_reduce($freeDomains, function ($acc, $domain) {
        if (!array_key_exists($domain, $acc)) {
            $acc[$domain] = 1;
        } else {
            $acc[$domain] += 1;
        }

        return $acc;
    }, []);

    return $grouped;
}
