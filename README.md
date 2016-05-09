# energenie-listen

This repo contains tools for collecting data from energenie mi|home devices and storing them as JSON to be read by other processes.

The data is collected by a service running on a Raspberry PI with the ENER314-RT (https://energenie4u.co.uk/index.phpcatalogue/product/ENER314-RT) connected to it.

Currently this just dumps the data to a json file, however it will shortly expose an SSDP Service so that https://github.com/ShaneMcC/wemo can read the data from it and collate it.

Devices known to be supported:
  - https://energenie4u.co.uk/index.phpcatalogue/product/MIHO005
