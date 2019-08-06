# energenie-listen

This repo contains tools for collecting data from energenie mi|home devices and storing them as JSON to be read by other processes.

The data is collected by a service running on a Raspberry PI with the ENER314-RT (https://energenie4u.co.uk/index.phpcatalogue/product/ENER314-RT) connected to it.

energenie-listen dumps the data to a json file, and then probe/probe.php can be cronned to POST this data to the a 
Graphs can be collected and viewed using https://github.com/ShaneMcC/collector-web service. The probe included in this repo behaves similarily to the probe from the https://github.com/ShaneMcC/wemo repo.

Devices known to be supported:
  - https://energenie4u.co.uk/index.phpcatalogue/product/MIHO005
