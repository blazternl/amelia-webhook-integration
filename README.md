# Amelia webhook integration template
Use Amelia webhooks as if they were WordPress action hooks. Create your own WordPress REST API endpoint, which acts like a webhook URL.

## Amelia data
Amelia webhook request data may look like this:

Example appointment:
```json
{
  "appointment": {
    "id": 123,
    "bookings": {
      "0": {
        "id": 123,
        "customerId": 16,
        "customer": {
          "id": 16,
          "firstName": "First",
          "lastName": "Last",
          "birthday": null,
          "email": "test@example.com",
          "type": "customer",
          "status": "visible",
          "note": null,
          "zoomUserId": null,
          "externalId": 2,
          "pictureFullPath": null,
          "pictureThumbPath": null,
          "phone": null,
          "gender": null
        },
        "status": "approved",
        "extras": {},
        "couponId": null,
        "price": 0,
        "coupon": null,
        "customFields": null,
        "info": "{\"firstName\":\"First\",\"lastName\":\"Last\",\"phone\":null}",
        "appointmentId": 36,
        "persons": 1,
        "token": null,
        "payments": {
          "0": {
            "id": 48,
            "customerBookingId": 48,
            "amount": 0,
            "gateway": "onSite",
            "gatewayTitle": "",
            "dateTime": "2020-09-21 10:00:00",
            "status": "pending",
            "data": ""
          }
        },
        "utcOffset": null,
        "aggregatedPrice": true,
        "isChangedStatus": true
      }
    },
    "notifyParticipants": "1",
    "internalNotes": "",
    "status": "approved",
    "serviceId": 2,
    "parentId": null,
    "providerId": 1,
    "locationId": null,
    "provider": {
      "id": 1,
      "firstName": "John",
      "lastName": "Doe",
      "birthday": null,
      "email": "johndoe@example.com",
      "type": "provider",
      "status": "visible",
      "note": null,
      "zoomUserId": null,
      "externalId": null,
      "pictureFullPath": null,
      "pictureThumbPath": null,
      "phone": "",
      "weekDayList": {
        "0": {
          "id": 1,
          "dayIndex": 1,
          "startTime": "09:00:00",
          "endTime": "20:30:00",
          "timeOutList": {},
          "periodList": {
            "0": {
              "id": 1,
              "startTime": "09:00:00",
              "endTime": "10:00:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 47,
                  "serviceId": 10
                }
              }
            },
            "1": {
              "id": 6,
              "startTime": "10:00:00",
              "endTime": "10:30:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 2,
                  "serviceId": 2
                }
              }
            },
            "2": {
              "id": 7,
              "startTime": "18:00:00",
              "endTime": "19:00:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 3,
                  "serviceId": 6
                }
              }
            },
            "3": {
              "id": 9,
              "startTime": "20:00:00",
              "endTime": "20:30:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 48,
                  "serviceId": 2
                }
              }
            }
          }
        },
        "1": {
          "id": 2,
          "dayIndex": 2,
          "startTime": "10:00:00",
          "endTime": "20:00:00",
          "timeOutList": {},
          "periodList": {
            "0": {
              "id": 12,
              "startTime": "19:30:00",
              "endTime": "20:00:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 9,
                  "serviceId": 2
                }
              }
            },
            "1": {
              "id": 31,
              "startTime": "18:45:00",
              "endTime": "19:15:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 31,
                  "serviceId": 10
                }
              }
            },
            "2": {
              "id": 52,
              "startTime": "10:00:00",
              "endTime": "10:30:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 50,
                  "serviceId": 12
                }
              }
            }
          }
        },
        "2": {
          "id": 3,
          "dayIndex": 3,
          "startTime": "09:00:00",
          "endTime": "20:30:00",
          "timeOutList": {},
          "periodList": {
            "0": {
              "id": 3,
              "startTime": "09:00:00",
              "endTime": "10:00:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 10,
                  "serviceId": 1
                }
              }
            },
            "1": {
              "id": 15,
              "startTime": "18:45:00",
              "endTime": "19:15:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 13,
                  "serviceId": 2
                }
              }
            },
            "2": {
              "id": 16,
              "startTime": "19:30:00",
              "endTime": "20:30:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 14,
                  "serviceId": 1
                }
              }
            }
          }
        },
        "3": {
          "id": 4,
          "dayIndex": 4,
          "startTime": "09:00:00",
          "endTime": "19:15:00",
          "timeOutList": {},
          "periodList": {
            "0": {
              "id": 4,
              "startTime": "09:00:00",
              "endTime": "09:30:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 53,
                  "serviceId": 13
                }
              }
            },
            "1": {
              "id": 18,
              "startTime": "18:45:00",
              "endTime": "19:15:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 55,
                  "serviceId": 12
                }
              }
            },
            "2": {
              "id": 46,
              "startTime": "09:30:00",
              "endTime": "10:00:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 54,
                  "serviceId": 10
                }
              }
            }
          }
        },
        "4": {
          "id": 5,
          "dayIndex": 5,
          "startTime": "08:30:00",
          "endTime": "20:30:00",
          "timeOutList": {},
          "periodList": {
            "0": {
              "id": 5,
              "startTime": "08:30:00",
              "endTime": "09:00:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 19,
                  "serviceId": 2
                }
              }
            },
            "1": {
              "id": 20,
              "startTime": "09:00:00",
              "endTime": "09:30:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 20,
                  "serviceId": 2
                }
              }
            },
            "2": {
              "id": 33,
              "startTime": "10:00:00",
              "endTime": "10:30:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 33,
                  "serviceId": 10
                }
              }
            },
            "3": {
              "id": 56,
              "startTime": "19:30:00",
              "endTime": "20:30:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 57,
                  "serviceId": 14
                }
              }
            }
          }
        },
        "5": {
          "id": 6,
          "dayIndex": 6,
          "startTime": "08:00:00",
          "endTime": "11:15:00",
          "timeOutList": {},
          "periodList": {
            "0": {
              "id": 23,
              "startTime": "09:00:00",
              "endTime": "10:00:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 23,
                  "serviceId": 9
                }
              }
            },
            "1": {
              "id": 34,
              "startTime": "08:00:00",
              "endTime": "08:45:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 34,
                  "serviceId": 10
                }
              }
            },
            "2": {
              "id": 55,
              "startTime": "10:15:00",
              "endTime": "11:15:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 56,
                  "serviceId": 9
                }
              }
            }
          }
        },
        "6": {
          "id": 7,
          "dayIndex": 7,
          "startTime": "10:00:00",
          "endTime": "11:00:00",
          "timeOutList": {},
          "periodList": {
            "0": {
              "id": 27,
              "startTime": "10:00:00",
              "endTime": "11:00:00",
              "locationId": null,
              "periodServiceList": {
                "0": {
                  "id": 27,
                  "serviceId": 5
                }
              }
            }
          }
        }
      },
      "serviceList": {},
      "dayOffList": {},
      "specialDayList": {},
      "locationId": null,
      "googleCalendar": null
    },
    "service": {
      "id": 2,
      "name": "PHP programming",
      "description": "",
      "color": "#FFFFFF",
      "price": 0,
      "pictureFullPath": null,
      "pictureThumbPath": null,
      "extras": {},
      "coupons": {},
      "position": null,
      "settings": "{\"payments\":{\"onSite\":true,\"payPal\":{\"enabled\":false},\"stripe\":{\"enabled\":false}},\"zoom\":{\"enabled\":false}}",
      "minCapacity": 1,
      "maxCapacity": 5,
      "duration": 1800,
      "timeBefore": null,
      "timeAfter": null,
      "bringingAnyone": false,
      "show": false,
      "aggregatedPrice": true,
      "status": "visible",
      "categoryId": 1,
      "category": null,
      "priority": {},
      "gallery": {},
      "recurringCycle": null,
      "recurringSub": null,
      "recurringPayment": 0
    },
    "location": null,
    "googleCalendarEventId": null,
    "zoomMeeting": null,
    "bookingStart": "2020-09-21 10:00:00",
    "bookingEnd": "2020-09-21 10:30:00",
    "type": "appointment"
  }
}
```
