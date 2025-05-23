
<?php

if (!function_exists('getPackages')) {
    function getPackages()
    {
        $filePath = storage_path('app/packages.json');

        if (!file_exists($filePath)) {
            return [];
        }

        $jsonContent = file_get_contents($filePath);
        return json_decode($jsonContent, true);
    }
}

if (!function_exists('getPackageBySlug')) {
    function getPackageBySlug($slug)
    {
        $packages = getPackages();

        foreach ($packages as $package) {
            if ($package['slug'] == $slug) {
                return $package;
            }
        }

        return null;
    }
}

if (!function_exists('getContactDetails')) {
    function getContactDetails()
    {
        $contact = [
            'phone' => '(+234) 808 337 1282',
            'email' => 'info@bluediner.com',
            'address' => 'Tropic Galleria 269, Muhammadu, Muhammadu Buhari Way, Central Area, Abuja 234009, F.C.T',
        ];

        return $contact;
    }
}

?>