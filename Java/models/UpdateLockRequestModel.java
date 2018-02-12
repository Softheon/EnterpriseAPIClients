/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * Update request model for Locks.
 */
public class UpdateLockRequestModel {
    /**
     * Gets or sets the expiration duration of the lock in minutes.
     */
    @JsonProperty(value = "ExpirationDuration")
    private Integer expirationDuration;

    /**
     * Gets or sets the access control level permissions of the lock.
     */
    @JsonProperty(value = "Acl")
    private Integer acl;

    /**
     * Gets or sets the name of the application creating the lock.
     */
    @JsonProperty(value = "ApplicationName")
    private String applicationName;

    /**
     * Get the expirationDuration value.
     *
     * @return the expirationDuration value
     */
    public Integer expirationDuration() {
        return this.expirationDuration;
    }

    /**
     * Set the expirationDuration value.
     *
     * @param expirationDuration the expirationDuration value to set
     * @return the UpdateLockRequestModel object itself.
     */
    public UpdateLockRequestModel withExpirationDuration(Integer expirationDuration) {
        this.expirationDuration = expirationDuration;
        return this;
    }

    /**
     * Get the acl value.
     *
     * @return the acl value
     */
    public Integer acl() {
        return this.acl;
    }

    /**
     * Set the acl value.
     *
     * @param acl the acl value to set
     * @return the UpdateLockRequestModel object itself.
     */
    public UpdateLockRequestModel withAcl(Integer acl) {
        this.acl = acl;
        return this;
    }

    /**
     * Get the applicationName value.
     *
     * @return the applicationName value
     */
    public String applicationName() {
        return this.applicationName;
    }

    /**
     * Set the applicationName value.
     *
     * @param applicationName the applicationName value to set
     * @return the UpdateLockRequestModel object itself.
     */
    public UpdateLockRequestModel withApplicationName(String applicationName) {
        this.applicationName = applicationName;
        return this;
    }

}