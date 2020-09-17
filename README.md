# Amelia webhook integration template
Use Amelia webhooks as if they were WordPress action hooks. Create your own WordPress REST API endpoint, which acts like a webhook URL.

## Amelia data
Amelia webhook request data may look like this:

Example appointment:
```
{
  appointment {
    id
    bookings {
      0 {
        id
        customerId
        customer: {
          id
          firstName
          lastName
          birthday
          email
          type
          status
          note
          zoomUserId
          externalId
          pictureFullPath
          pictureThumbPath
          phone
          gender
        }
        status
        extras {
          ...
        }
        couponId
        price
        coupon
        customFields
        info
        appointmentId
        persons
        token
        payments {
          0 {
            id
            customerBookingId
            amount
            gateway
            gatewayTitle
            dateTime
            status
            data
          }
        }
        utcOffset
        aggregatedPrice
        isChangedStatus
      }
    }
    notifyParticipants
    internalNotes
    status
    serviceId
    parentId
    providerId
    locationId
    provider {
      id
      firstName
      lastName
      birthday
      email
      type
      status
      note
      zoomUserId
      externalId
      pictureFullPath
      pictureThumbPath
      phone
      weekDayList {
        0 {
          id
          dayIndex
          startTime
          endTime
          timeOutList {
            ...
          }
          periodList {
            0 {
              id
              startTime
              endTime
              locationId
              periodServiceList {
                0 {
                  id
                  serviceId
                }
              }
            }
            1 {
              ...
            }
            2 {
              ...
            }
            ...
        }
        1 {
          ...
        }
        2 {
          ...
        }
        3 {
          ...
        }
        4 {
          ...
        }
        5 {
          ...
        }
        6 {
          ...
        }
      }
      serviceList {
        ...
      }
      dayOffList {
        ...
      }
      specialDayList {
        ...
      }
      locationId
      googleCalendar
    }
    service {
      id
      name
      description
      color
      price
      pictureFullPath
      pictureThumbPath
      extras {
        ...
      }
      coupons {
        ...
      }
      position
      settings
      minCapacity
      maxCapacity
      duration
      timeBefore
      timeAfter
      bringingAnyone
      show
      aggregatedPrice
      status
      categoryId
      category
      priority {
        ...
      }
      gallery {
        ...
      }
      recurringCycle
      recurringSub
      recurringPayment
    }
    location
    googleCalendarEventId
    zoomMeeting
    bookingStart
    bookingEnd
    type
  }
}
```
